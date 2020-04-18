<?php  
class Users extends Controller {
    public function __construct() {
      
    }

    public function sign_in() {
      $this->view('users/sign_in');
    }

    public function sign_up() {
      $this->view('users/sign_up');
    }
  }
?> 