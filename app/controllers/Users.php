<?php
class Users extends Controller {
    private $data;
    private $time_sound;
    private $reproduct_sound;
    private $time_light;

    public function __construct() {
      $this->userModel = $this->model('User');
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
          if ($this->userModel->findUserByEmail($data['email'])) {
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
          
          // Register user
          if ($this->userModel->sign_up($data)) {
            flash('register_success', "Inscription réussie avec succès");
            redirect('users/sign_in');
            print_r('Compte créé avec succès');
          } else { 
            die("Une erreur est survenue");
          }
           
        } else {
          $this->view('users/sign_up', $data);
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
        $this->view('users/sign_up', $data);
      }
    }

   public function sign_in(){
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

        // Check for user/email
        if($this->userModel->findUserByEmail($data['email'])){
        } else {
          $data['email_error'] = 'Utilisateur non trouvé';
        }

        // Make sure errors are empty
        if(empty($data['email_error']) && empty($data['password_error'])){
          // Check and set logged in user
          $loggedInUser = $this->userModel->sign_in($data['email'], $data['password']);

          if($loggedInUser){
            // Create Session
            $this->createUserSession($loggedInUser);
          } else {
            $data['password_error'] = 'Mot de passe incorrect';

            $this->view('users/sign_in', $data);
          }
        } else {
          // Load view with errors
          $this->view('users/sign_in', $data);
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
        $this->view('users/sign_in', $data);
      }
    }

    public function createUserSession($user){
      $_SESSION['user_id'] = $user->id;
      $_SESSION['user_email'] = $user->email;
      $_SESSION['user_name'] = $user->name;
      redirect('users/profile');
    }

    public function logout(){
      unset($_SESSION['user_id']);
      unset($_SESSION['user_email']);
      unset($_SESSION['user_name']);
      session_destroy();
      redirect('');
    }

    public function notifications() {
      if (!isLoggedIn()) { 
        redirect('users/sign_in'); 
      } else {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          if(empty($_POST["email"])) {
                  $data = [
                      'error_email' =>"Vous n'avez pas entré d'adresse email"
                  ];
                  $this->view('users/notifications', $data);
          } else {
                  if ($this->userModel->findUserByEmail($_POST['email'])) {
                      $notifications = $this->userModel->findNotificationsOfUser(trim($_POST['email']));
                      $data= [
                          'notifications' =>$notifications,
                          'absence_notifications' => "Vous n'avez pas de notifications"
                      ];
                      $this->view('users/notifications', $data);
                  } else {
                      $data = [
                          'error_email' => "Veuillez entrer une adresse email valide"
                      ];
                      $this->view('users/notifications', $data);
                  }
          }
        } else {
              $data = [
                  'debut' => ' '
              ];
              $this->view('users/notifications', $data);
        }
      }
    }

    public function profile() {
      if (!isLoggedIn()) { redirect('users/sign_in'); }
      $this->view('users/profile');
    }

    public function test_results() {
      if (!isLoggedIn()) { 
        redirect('users/sign_in'); 
      } else {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(empty($_POST["email"])) {
                $data = [
                    'error_email' =>"Vous n'avez pas entré d'adresse email"
                ];
                $this->view('users/test_results', $data);
            } else {
                if ($this->userModel->findUserByEmail($_POST['email'])) {
                    $test_results1 = $this->userModel->findTests1OfUser(trim($_POST['email']));
                    $test_results2 = $this->userModel->findTests2OfUser(trim($_POST['email']));
                    $test_results3 = $this->userModel->findTests3OfUser(trim($_POST['email']));
                    $data= [
                        'time_sound' => $test_results1,
                        'reproduct_sound' => $test_results2,
                        'time_light' => $test_results3,
                        'absence_time_sound' => "Vous n'avez pas effectué de test de temps de réaction à un son",
                        'absence_reproduct_sound' => "Vous n'avez pas effectué de test de capacité à reproduire un son",
                        'absence_time_light' => "Vous n'avez pas effectué de test de temps de réaction à une lumière"
                    ];
                    $this->view('users/test_results', $data);
                } else {
                    $data = [
                        'error_email' => "Veuillez entrer une adresse email valide"
                    ];
                    $this->view('users/test_results', $data);
                }
            }
        } else {
            $data = [
                'debut' => ' '
            ];
            $this->view('users/test_results', $data);
        }
      }
    }

    private

    function isLoggedIn() {
      return isset($_SESSION['user_id']);
    } 
  }
?> 