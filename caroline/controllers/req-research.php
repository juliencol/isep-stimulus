<?php 



if (isset($_POST['research']) AND !empty($_POST['research'])) {
    $research = htmlspecialchars($_POST['research']);

    if (isset($_GET['submit_refine']) AND !empty($_GET['submit_refine'])) {

        echo 'Je suis dans la boucle if submit_refine';

        if (isset($_POST['gender']) AND !empty($_POST['gender'])) {
            $gender_redine = $_POST['gender'];

            $results = $bdd->query('SELECT * FROM users WHERE first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%" AND gender = $gender_refine'); 
        }

        
    }

    else {
        $results = $bdd->query('SELECT * FROM users WHERE first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%"'); 
    }

    
}

?>