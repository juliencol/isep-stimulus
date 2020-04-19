<?php  
class Faqs extends Controller {
    public function __construct() {
      
    }

    public function index() {
      $this->view('faqs/index');
    }

    public function new() {
      $this->view('faqs/new');
    }

    public function edit() {
      $this->view('faqs/edit');
    }
  }
?> 