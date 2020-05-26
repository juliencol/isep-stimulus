<?php  
class Users extends Controller {
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
          'confirmed password' => trim($_POST['confirmed_password']),
          'first_name_error' => '',
          'last_name_error' => '',
          'email_error' => '',
          'password_error' => '',
          'confirmed_password_error' => ''
        ];

        // Validations
        if (empty($data['last_name'])) {
          $data['last_name_error'] = "Entrez votre prénom";
        }
         if (empty($data['first_name'])) {
          $data['first_name_error'] = "Entrez votre nom";
        }
         if (empty($data['birthday_date'])) {
          $data['birthday_date_error'] = "Entrez votre date de naissance";
        }
         if (empty($data['email'])) {
          $data['email_error'] = "Entrez une adresse email valide";
        } else {
          if ($this->userModel->findUserByEmail($data['email'])) {
            $data['email_error'] = "Cette adresse email est déjà utilisée"; 
          }
        }
         if (empty($data['password'])) {
          $data['email_error'] = "Entrez un mot de passe valide";
        } elseif (strlen($data['password'] < 8)) {
           $data['email_error'] = "Votre mot de passe doit contenir au moins 8 caratères";
        }
        if (empty($data['confirmed_password'])) {
          $data['confirmed_password_error'] = "Confirmez votre mot de passe";
        } else {
          if ($data['password'] != $data['confirmed_password']) {
            $data['confirmed_password_error'] = "Les mots de passes sont différents";
          }
        }

        // Make sure errors are empty
        if (empty($data['email_error']) && empty($data['name_error']) && empty($data['password_error']) && empty($data['confirmed_password_error']) ) {
          // Validated


          // Hash password
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          
          // Register user
          if ($this->userModel->register($data)) {
           redirect('users/sign_in');
          } else { 
            die("Une erreur est survenue");
          }
          

        } else {
          $this->view('users/sign_up', $data);
        }
 
      } else {
        $data = [
          'name' => '',
          'email' => '',
          'password' => '',
          'confirmed password' => '',
          'name_error' => '',
          'email_error' => '',
          'password_error' => '',
          'confirmed_password_error' => ''
        ];
        $this->view('users/sign_up', $data);
      }
    }

    public function sign_in() {
      $this->view('users/sign_in');
    }

    public function notifications() {
      $this->view('users/notifications');
    }

    public function profile() {
      $this->view('users/profile');
    }

    public function test_results() {
        $test_results = $this->userModel->findTest1NeedsOfUser($data['name']);
        $this->view('users/test_results', $test_results);
    }
  }
?> 