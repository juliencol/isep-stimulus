<?php  
class Cgus extends Controller {
    public function __construct() {
      
    }

    public function index() {
      $this->view('cgus/index');
    }

    public function edit() {
      $this->view('cgus/edit');
    }
  }
?> 