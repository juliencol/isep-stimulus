<?php  
class Supervisors extends Controller {

    public function __construct() {
      $this->supervisorModel = $this->model('Supervisor');
    }

    public function sign_up() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
          'first_name' => trim($_POST['first_name']),
          'last_name' => trim($_POST['last_name']),
          'birthday_date' => trim($_POST['birthday_date']),
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'confirmed_password' => trim($_POST['confirmed_password']),
          'first_name_error' => '',
          'last_name_error' => '',
          'email_error' => '',
          'password_error' => '',
          'confirmed_password_error' => '',
          'birthday_date_error' => ''
        ];

        if (empty($data['last_name'])) {
          $data['last_name_error'] = "Entrez nom de famille svp";
        }
         if (empty($data['first_name'])) {
          $data['first_name_error'] = "Entrez votre prénom svp";
        }
         if (empty($data['birthday_date'])) {
          $data['birthday_date_error'] = "Entrez votre date de naissance svp";
        }
        if (empty($data['password'])) {
          $data['password_error'] = "Entrez un mot de passe svp";
        }
         if (empty($data['email'])) {
          $data['email_error'] = "Entrez une adresse email valide svp";
        } else {
          if ($this->supervisorModel->findSupervisorByEmail($data['email'])) {
            $data['email_error'] = "Cette adresse email est déjà utilisée"; 
          }
        }
         if (empty($data['password'])) {
          $data['password_error'] = "Entrez un mot de passe valide";
        }

        // Make sure errors are empty
        if (empty($data['last_name_error']) && empty($data['first_name_error']) && empty($data['email_error']) && empty($data['name_error']) && empty($data['password_error']) && empty($data['confirmed_password_error']) ) {
          // Validated

          // Hash password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          
          // Register supervisor
          if ($this->supervisorModel->sign_up($data)) {
            flash('register_success', "Inscription réussie avec succès");
            redirect('supervisor/sign_in');
            print_r('Compte créé avec succès');
          } else { 
            die("Une erreur est survenue");
          }
           
        } else {
          $this->view('supervisor/sign_up', $data);
        }
 
      } else {
         $data = [
          'first_name' => '',
          'last_name' => '',
          'birthday_date' => '',
          'email' => '',
          'password' => '',
          'confirmed_password' => '',
          'first_name_error' => '',
          'last_name_error' => '',
          'email_error' => '',
          'password_error' => '',
          'confirmed_password_error' => '',
          'birthday_date_error' => ''
        ];
        $this->view('supervisor/sign_up', $data);
      }
    }

    public function sign_in() {
      // Check for POST
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
        $data =[
          'email' => trim($_POST['email']),
          'password' => trim($_POST['password']),
          'email_error' => '',
          'password_error' => '',      
        ];

        // Validations
        if(empty($data['email'])){
          $data['email_error'] = 'Entrez votre adresse email svp';
        }
        if(empty($data['password'])){
          $data['password_error'] = 'Entrez votre mot de passe svp';
        }

        // Check for supervisor/email
        if($this->supervisorModel->findSupervisorByEmail($data['email'])){
        } else {
          $data['email_error'] = 'Utilisateur non trouvé';
        }

        // Make sure errors are empty
        if(empty($data['email_error']) && empty($data['password_error'])){
          // Check and set logged in supervisor
          $loggedInSupervisor = $this->supervisorModel->sign_in($data['email'], $data['password']);

          if($loggedInSupervisor){
            // Create Session
            $this->createSupervisorSession($loggedInSupervisor);
          } else {
            $data['password_error'] = 'Mot de passe incorrect';

            $this->view('supervisors/sign_in', $data);
          }
        } else {
          // Load view with errors
          $this->view('supervisors/sign_in', $data);
        }


      } else {
        // Init data
        $data =[    
          'email' => '',
          'password' => '',
          'email_error' => '',
          'password_error' => '',        
        ];

        // Load view
        $this->view('supervisors/sign_in', $data);
      }
    }

    public function createSupervisorSession($supervisor){
      $_SESSION['supervisor_id'] = $supervisor->id;
      $_SESSION['supervisor_email'] = $supervisor->email;
      $_SESSION['supervisor_name'] = $supervisor->name;
      $route = 'supervisors/profile/' . $_SESSION['supervisor_id'];
      redirect($route);  
    }

    public function logout(){
      unset($_SESSION['supervisor_id']);
      unset($_SESSION['supervisor_email']);
      unset($_SESSION['supervisor_name']);
      session_destroy();
      redirect('');
    }


    public function profile() {
        $supervisor = $this->supervisorModel->getSupervisorById($id);
        $data = [
          'supervisor' => $supervisor
        ];
        $this->view('supervisors/profile', $data);
    }  

   
    public function search() {
      /*
      if (isset($_POST['research']) AND !empty($_POST['research'])) {
        $research = htmlspecialchars($_POST['research']); 
        if (isset($_POST['company']) AND !empty($_POST['company'])) {
            $results = $bdd->query('SELECT * FROM users WHERE (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
            echo '<br/><em>Affiner par : <strong>' . $_POST['company'] . '</strong></em>';
        }
        else if (isset($_POST['gender']) AND !empty($_POST['gender'])) {
            if($_POST['gender'] == 'female') { 
                $results = $bdd->query('SELECT * FROM users WHERE (gender="F") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Femme</strong></em>';
            }
      
            else if ($_POST['gender'] == 'male') {
                $results = $bdd->query('SELECT * FROM users WHERE (gender="M") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
                echo '<br/><em>Affiner par : <strong>Homme</strong></em>';
            }
            else if ($_POST['gender'] == 'other') {
                $results = $bdd->query('SELECT * FROM users WHERE (gender="A") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
                echo '<br/><em>Affiner par : <strong>Autre</strong></em>';
            }
        }
        else if (isset($_POST['gender']) AND !empty($_POST['gender']) AND isset($_POST['company']) AND !empty($_POST['company'])) {
            if($_POST['gender'] == 'female') { 
                $results = $bdd->query('SELECT * FROM users WHERE (gender="F") AND (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Femme</strong>, <strong>' . $_POST['company'] . '</strong></em>';
            }
            else if($_POST['gender'] == 'male') { 
                $results = $bdd->query('SELECT * FROM users WHERE (gender="M") AND (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Homme</strong>, <strong>' . $_POST['company'] . '</strong></em>';
            }
            
            else if ($_POST['gender'] == 'other') {
                $results = $bdd->query('SELECT * FROM users WHERE (gender="A") AND (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Autre</strong>, <strong>' . $_POST['company'] . '</strong></em>';
            }
            
        }
        else {
            $results = $bdd->query('SELECT * FROM users WHERE (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
        }
      }
      else if (isset($_POST['gender']) AND !empty($_POST['gender']) AND isset($_POST['company']) AND !empty($_POST['company'])) {
          $research = htmlspecialchars($_POST['research']); 
          if($_POST['gender'] == 'female') { 
              $results = $bdd->query('SELECT * FROM users WHERE (gender="F") AND (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
              echo '<br/><em>Affiner par : <strong>Femme</strong>, <strong>' . $_POST['company'] . '</strong></em>';
          }
          else if($_POST['gender'] == 'male') { 
              $results = $bdd->query('SELECT * FROM users WHERE (gender="M") AND (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
              echo '<br/><em>Affiner par : <strong>Homme</strong>, <strong>' . $_POST['company'] . '</strong></em>';
          }
          
          else if ($_POST['gender'] == 'other') {
              $results = $bdd->query('SELECT * FROM users WHERE (gender="A") AND (company_name="' . $_POST['company'] . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
              echo '<br/><em>Affiner par : <strong>Autre</strong>, <strong>' . $_POST['company'] . '</strong></em>';
          }
          
      }
      else if (isset($_POST['gender']) AND !empty($_POST['gender'])) {
          $research = htmlspecialchars($_POST['research']); 
          if($_POST['gender'] == 'female') { 
              $results = $bdd->query('SELECT * FROM users WHERE (gender="F")'); 
              echo '<br/><em>Affiner par : <strong>Femme</strong></em>';
          }
          else if ($_POST['gender'] == 'male') {
              $results = $bdd->query('SELECT * FROM users WHERE (gender="M") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
              echo '<br/><em>Affiner par : <strong>Homme</strong></em>';
          }
          else if ($_POST['gender'] == 'other') {
              $results = $bdd->query('SELECT * FROM users WHERE (gender="A") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
              echo '<br/><em>Affiner par : <strong>Autre</strong></em>';
          }
      }
      else if (isset($_POST['company']) AND !empty($_POST['company'])) {
          $research = htmlspecialchars($_POST['research']); 
          $results = $bdd->query('SELECT * FROM users WHERE company_name="' . $_POST['company'] . '"'); 
          echo '<br/><em>Affiner par : <strong>' . $_POST['company'] . '</strong></em>';
      }
      */
      $this->view('supervisors/search');
    }

    private

    function isLoggedIn() {
      return isset($_SESSION['supervisor_id']);
    } 
    
  }