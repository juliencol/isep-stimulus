<?php  
class Supervisors extends Controller {
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
        $this->view('supervisors/sign_in', $data);
      }
    }
  }