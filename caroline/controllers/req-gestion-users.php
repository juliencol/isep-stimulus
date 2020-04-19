<?php

if (isset($_GET['ban']) AND !empty($_GET['ban'])) {
    $ban = $_GET['ban'];
    $banned = $bdd->query('SELECT * FROM banned');

    while ($data = $banned->fetch()) {
        if ($ban == $data['email']) {
            echo 'L\'adresse ' . $data['email'] . 'a déjà été banni !';

        } else {
            $req = $bdd->prepare('INSERT INTO banned(email) VALUES(:email)');
            $req-> execute(array('email' => $ban));
            echo 'L\'adresse <em>' . $ban . '</em> a bien été banni. ';
        }
    }
}

if (isset($_GET['delete']) AND !empty($_GET['delete'])) {
    $delete = $_GET['delete'];

    $req = $bdd->prepare('DELETE FROM users WHERE user_id = ?');
    $req->execute(array($delete));

    echo 'L\'utilisateur a été supprimé. <br /><br />'; 
    //j'arrive pas à faire "L'utilisateur ... a bien été supprimé"
    //comment récupérer le nom de l'utilisateur supprimé ?

}



?>