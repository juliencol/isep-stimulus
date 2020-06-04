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
      if(isset($_POST['expediteur']) AND isset($_POST['objet']) AND isset($_POST['message'])) {
        $expediteur=$_POST['expediteur'];
        $objet=$_POST['objet'];
        $message= nl2br($_POST['message']);
        $destinataire="celia.houlette@yahoo.fr";
        $header="MIME-Version: 1.0\r\n";
        $header.='From:'.$expediteur.'<'.$expediteur.'>'."\n";
        $header.='Content-Type:text/html; charset="uft-8"'."\n";
        $header.='Content-Transfer-Encoding: 8bit';
        mail($destinataire, $objet, $message, $header);
	    }
      $this->view('pages/contact');
    }
  }
?> 
  