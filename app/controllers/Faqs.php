<?php
class Faqs extends Controller {
    private $faq_question;
    private $faq_invisible;

    private $data;

    public function __construct() {
        $this->faqModel = $this->model('Faq');
    }



    public function index() {
        $faq_questions=$this->faqModel->QuestionVisible();


        $this->view('faqs/index',$faq_questions);
    }

    public function new() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors=[];
            if(isset($_POST['Sujet'])){

                $data = [
                    'id'=> NULL,
                    'supervisor_id'=>NULL,
                    'title' => htmlspecialchars(trim($_POST['Sujet'])),
                    'subject' => htmlspecialchars(trim($_POST['Question'])),
                    'answer' => htmlspecialchars(trim($_POST['Message'])),
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
            if (isset ($_POST['idSupp'])){





                if ($this->faqModel->removeQuestion($num)) {
                    echo'supprimé';
                    redirect('faqs/edit');
                }
            }
            $name='Question'.$num;
            $numVisible=$_POST[$name];

            if (!isset ($_POST['idSupp'])){

                if($numVisible==1){

                    $question=$this->faqModel->uneQuestion($num);
                    foreach($question as $question){
                        $sujet=$question->subject;
                        $titre=$question->title;
                        $reponse=$question->answer;

                        $data = [
                            'id'=> trim($num),
                            'supervisor_id'=>NULL,
                            'title' => trim($titre),
                            'subject' => trim($sujet),
                            'answer' => trim($reponse),
                            'visible' => trim(0),
                        ];

                        
                        if($this->faqModel->removeQuestion($num)){
                            $this->faqModel->addQuestion($data);
                            redirect('faqs/edit');
                        }
                    }


                }

                if($numVisible==0){

                    $question1=$this->faqModel->uneQuestion($num);

                    foreach($question1 as $question1){
                        $sujet1=$question1->subject;
                        $titre1=$question1->title;
                        $reponse1=$question1->answer;


                        $data = [
                            'id'=> trim($num),
                            'supervisor_id'=>NULL,
                            'title' => trim($titre1),
                            'subject' => trim($sujet1),
                            'answer' => trim($reponse1),
                            'visible' => trim(1),
                        ];

                        
                        if($this->faqModel->removeQuestion($num)){
                            $this->faqModel->addQuestion($data);
                            redirect('faqs/edit');
                        }
                    }


                }

            }

        }






       
        $this->view('faqs/edit',$faq_questions);


    }
}
?> 