<?php  
class Admins extends Controller {
    public function __construct() {
      
    }

    public function sign_in() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // process the form
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
        $this->view('admins/sign_in', $data);
      }
    }

    public function manage_user() {
      $this->view('admins/manage_user');
    }

    public function add_user() {
      $this->view('admins/add_user');
    }

    public function edit_user() {
      $this->view('admins/edit_user');
    }
    
    /*
    public function add_user() {
      if (isset($_POST['submit_add']) AND !empty($_POST['submit_add'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birthday_date = $_POST['birthday_date'];
        $company_name = $_POST['company_name'];
        $employee_number = $_POST['employee_number'];

        $req = $bdd->prepare('INSERT INTO users(first_name ,last_name, gender, email, password, birthday_date, company_name, employee_number) VALUES(:first_name, :last_name, :gender, :email, :password, :birthday_date, :company_name, :employee_number)');
        $req->execute(array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'email' => $email,
            'password' => $password,
            'birthday_date' => $birthday_date,
            'company_name' => $company_name,
            'employee_number' => $employee_number
        ));

        echo 'L\'utilisateur <strong>' . $first_name . ' ' . $last_name . '</strong> a bien été ajouté ! <br /><br />';
      }
      $this->view('supervisors/add_user', $data);
    }

    public function del_user() {
      $users = $bdd->query('SELECT * FROM users');

      if (isset($_GET['delete']) AND !empty($_GET['delete'])) {
          $delete = $_GET['delete'];

          $req = $bdd->prepare('DELETE FROM users WHERE user_id = ?');
          $req->execute(array($delete));

          echo 'L\'utilisateur a été supprimé. <br /><br />';
      }
      $this->view('supervisors/del_user', $data);
    }

    public function edit_user() {
      $modify = $_GET['modify'];
      $user = $bdd->prepare('SELECT * FROM users WHERE user_id = ?');
      $user->execute(array($modify));

      while ($data = $user->fetch()) {
          $first_name = $data['first_name'];
          $last_name = $data['last_name'];
          $gender = $data['gender'];
          $birthday_date = $data['birthday_date'];
          $company_name = $data['company_name'];
          $employee_number = $data['employee_number'];
          $email = $data['email'];
          $password = $data['password'];
      } 

      if (isset($_POST['submit_modify']) AND !empty($_POST['submit_modify'])) {

        if (isset($_POST['new_first_name']) AND !empty($_POST['new_first_name'])) {
          $new_first_name = $_POST['new_first_name'];
          $user = $bdd->prepare('UPDATE users SET first_name = :new_first_name WHERE user_id = :user_id');
          $user->execute(array(
            'new_first_name' => $new_first_name,
            'user_id' => $modify,
          ));

          echo 'Le <strong>prénom</strong> a bien été modifié. <br />';
        }

        if (isset($_POST['new_last_name']) AND !empty($_POST['new_last_name'])) {
          $new_last_name = $_POST['new_last_name'];
          $user = $bdd->prepare('UPDATE users SET last_name = :new_last_name WHERE user_id = :user_id');
          $user->execute(array(
            'new_last_name' => $new_last_name,
            'user_id' => $modify,
          ));
          echo 'Le <strong>nom</strong> a bien été modifié. <br/>';
        }

        if (isset($_POST['new_gender']) AND !empty($_POST['new_gender'])) {
          $new_gender = $_POST['new_gender'];
          $user = $bdd->prepare('UPDATE users SET gender = :new_gender WHERE user_id = :user_id');
          $user->execute(array(
            'new_gender' => $new_gender,
            'user_id' => $modify,
          ));
          echo 'Le <strong>sexe</strong> a bien été modifié. <br/>';
        }

        if (isset($_POST['new_birthdate']) AND !empty($_POST['new_birthdate'])) {
          $new_birthdate = $_POST['new_birthdate'];
          $user = $bdd->prepare('UPDATE users SET birthdate = :new_birthdate WHERE user_id = :user_id');
          $user->execute(array(
            'new_birthdate' => $new_birthdate,
            'user_id' => $modify,
          ));
          echo 'La <strong>date de naissance</strong> a bien été modifiée. <br/>';
        }

        if (isset($_POST['new_company_name']) AND !empty($_POST['new_company_name'])) {
          $new_company_name = $_POST['new_company_name'];
          $user = $bdd->prepare('UPDATE users SET company_name = :new_company_name WHERE user_id = :user_id');
          $user->execute(array(
            'new_company_name' => $new_company_name,
            'user_id' => $modify,
          ));
          echo 'Le <strong>nom de l\'entreprise</strong> a bien été modifié. <br/>';
        }

        if (isset($_POST['new_employee_number']) AND !empty($_POST['new_employee_number'])) {
          $new_employee_number = $_POST['new_employee_number'];
          $user = $bdd->prepare('UPDATE users SET employee_number = :new_employee_number WHERE user_id :user_id');
          $user->execute(array(
              'new_employee_number' => $new_employee_number,
              'user_id' => $modify,
          ));
          echo 'Le <strong>numéro employé</strong> a bien été modifié. <br/>';
        }

        if (isset($_POST['new_email']) AND !empty($_POST['new_email'])) {
          $new_email = $_POST['new_email'];
          $user = $bdd->prepare('UPDATE users SET email = :new_email WHERE user_id = :user_id');
          $user->execute(array(
            'new_email' => $new_email,
            'user_id' => $modify,
          ));
          echo 'L\'<strong>adresse email</strong> a bien été modifiée. <br/>';
        }

        if (isset($_POST['new_password']) AND !empty($_POST['new_password'])) {
          $new_password = $_POST['new_password'];
          $user = $bdd->prepare('UPDATE users SET password = :new_password WHERE user_id = :user_id');
          $user->execute(array(
              'new_password' => $new_password,
              'user_id' => $modify,
          ));
          echo 'Le <strong>mot de passe</strong> a bien été modifié. <br/>';
        }
      }
      $this->view('supervisors/edit_user', $data);
    }

    public function ban_user() {
      $users = $bdd->query('SELECT * FROM users');

      //y a un problème avec la fonctionnalité bannir
      //il faut que je modifie le while ou les conditions if
      if (isset($_GET['ban']) AND !empty($_GET['ban'])) {
          $ban = $_GET['ban'];
          while ($data = $users->fetch()) {
              if (isBan($ban)) {
              }

              else {
                  $req = $bdd->prepare('INSERT INTO banned(email) VALUES(:email)');
                  $req-> execute(array('email' => $ban));
                  echo 'L\'adresse <em>' . $ban . '</em> a bien été banni. <br/>';
              }
          }
      }
      $users->closeCursor();

      function isBan($ban) {
          $bdd = new PDO('mysql:host=localhost;dbname=appsiteweb_test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
          $banned_emails = $bdd->prepare('SELECT * FROM banned WHERE email = ?');
          $banned_emails->execute(array($ban));
          $exist = $banned_emails->rowCount();

          if ($exist != 0) {
              return true; // true = oui c'est ban
          }
      }

      $this->view('supervisors/ban_user', $data);
    }


    public function deban_user() {
      $users = $bdd->query('SELECT * FROM users');

      if (isset($_GET['deban']) AND !empty($_GET['deban'])) {
          $deban = $_GET['deban'];
          $req = $bdd->prepare('DELETE FROM banned WHERE email = ?');
          $req->execute(array($deban));

          echo 'L\'adresse ' . $deban . ' a été débannie. <br /><br />'; 
      }
      $this->view('supervisors/deban_user', $data);
    }*/
    
  }