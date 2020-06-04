<?php
class Cgus extends Controller {
    private $cgus;
    private $data;
    private $idcgu;

    public function __construct() {
        $this->cguModel = $this->model('Cgu');
    }

    public function index() {
        $cgus = $this->cguModel->CGU();
        $this->view('cgus/index',$cgus);
    }

    public function edit() {
        $cgu = $this->cguModel->CGU();
        $this->view('cgus/edit',$cgu);
    }

    public function new() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $data = [
                'id'=> NULL,
                'content'=> htmlspecialchars(trim($_POST['cgu'])),
          ];  
          if ($this->cguModel->addCGU($data)) {
            redirect('cgus/edit');
          }
          else {
              echo 'erreur';
          }
        }
      else {
          $cgu = $this->cguModel->CGU();
          $this->view('cgus/new',$cgu);
          foreach($cgu as $cgus):
              $idcgu = $cgus->id;
              $this->cguModel->removeCGU($idcgu);
          endforeach;
        }
    }
}
?> 