<?php  
class Supervisors extends Controller {

    public function __construct() {
      $this->db = new Database;
    }

    public function sign_in() {
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
        $this->view('supervisors/sign_in', $data);
      }
    }


    public function launch_test() {
        $this->view('supervisors/launch_test');
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
    
  }