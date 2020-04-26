<?php  
class Faqs extends Controller {
  private $faq_question;
 
  private $data;

    public function __construct() {
      $this->faqModel = $this->model('Faq');
    }

      

    public function index() {
      $faq_questions=$this->faqModel->Question();

      $this->view('faqs/index',$faq_questions);
    }

    public function new() {
      
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $errors=[];
        if(isset($_POST['Sujet'])){
         
          $data = [
            'id'=> NULL,
            'supervisor_id'=>NULL,
            'title' => trim($_POST['Sujet']),
            'subject' => trim($_POST['Question']),
            'answer' => trim($_POST['Message']),
          ];  
          

          if (empty($data['title'])){
            $errors['title']='Titre obligatoire';

          }
          if (empty($data['subject'])){
            $errors['subject']='Sujet obligatoire';
            
          }
          if (empty($data['answer'])){
            $errors['answer']='Message obligatoire';
          
          }
          
          if(empty($errors)){
            
            if ($this->faqModel->addQuestion($data)){
              redirect('faqs/edit');
            }
            else{
              echo 'erreur';
            }
          
          }

        
          
        }
        else{
          $num1=$_POST['newQuestion'];
          $question=$this->faqModel->modifQuestion($num1); 
          $this->faqModel->removeQuestion($num1);
          $this->view('faqs/new',$question);
        
        }
      }
        if(empty($errors)){
          $this->view('faqs/new');
        }

      
      
     

    }

    public function edit() {
      $faq_questions=$this->faqModel->Question();
      
      
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num=$_POST['idQuestion'];
       
        
        
      
      if ($this->faqModel->removeQuestion($num)) {
        echo'supprimé';
        redirect('faqs/edit');
      }
     

    }
      $this->view('faqs/edit',$faq_questions);
      
    }
  }
?> 