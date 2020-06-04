<?php  
class Pages extends Controller {
    public function __construct() {
      
    }

    public function index() {
      $this->view('pages/index');
    }

    public function sign_in() {
      $this->view('pages/sign_in');
    }

    public function team() {
       $this->view('pages/team');
    }

    public function contact() {
      $this->view('pages/contact');
    }
  }
?> 
  