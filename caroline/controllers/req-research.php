<?php 
if (isset($_POST['research']) AND !empty($_POST['research'])) {
    $research = htmlspecialchars($_POST['research']);
    
    $results = $bdd->query('SELECT * FROM users WHERE first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%"'); 
}
?>