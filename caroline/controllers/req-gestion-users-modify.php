<?php
$modify = $_GET['modify'];
$user = $bdd->prepare('SELECT * FROM users WHERE user_id = ?');
$user->execute(array($modify));

while ($data = $user->fetch()) {
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $gender = $data['gender'];
    $birthdate = $data['birthdate'];
    $company_name = $data['company_name'];
    $employee_number = $data['employee_number'];
    $email = $data['email'];
    $password = $data['password'];
} 

if (isset($_POST['submit_modify']) AND !empty($_POST['submit_modify'])) {

    if (isset($_POST['new_first_name']) AND !empty($_POST['new_first_name'])) {
        $new_first_name = $_POST['new_first_name'];
        $user = $bdd->prepare('UPDATE users SET first_name = :new_first_name WHERE user_id = :user_id');
        $user->execute(array(
            'new_first_name' => $new_first_name,
            'user_id' => $modify,
        ));

        echo 'Le <strong>prénom</strong> a bien été modifié. <br />';
    }

    if (isset($_POST['new_last_name']) AND !empty($_POST['new_last_name'])) {
        $new_last_name = $_POST['new_last_name'];
        $user = $bdd->prepare('UPDATE users SET last_name = :new_last_name WHERE user_id = :user_id');
        $user->execute(array(
            'new_last_name' => $new_last_name,
            'user_id' => $modify,
        ));
        echo 'Le <strong>nom</strong> a bien été modifié. <br/>';
    }

    if (isset($_POST['new_gender']) AND !empty($_POST['new_gender'])) {
        $new_gender = $_POST['new_gender'];
        $user = $bdd->prepare('UPDATE users SET gender = :new_gender WHERE user_id = :user_id');
        $user->execute(array(
            'new_gender' => $new_gender,
            'user_id' => $modify,
        ));
        echo 'Le <strong>sexe</strong> a bien été modifié. <br/>';
    }

    if (isset($_POST['new_birthdate']) AND !empty($_POST['new_birthdate'])) {
        $new_birthdate = $_POST['new_birthdate'];
        $user = $bdd->prepare('UPDATE users SET birthdate = :new_birthdate WHERE user_id = :user_id');
        $user->execute(array(
            'new_birthdate' => $new_birthdate,
            'user_id' => $modify,
        ));
        echo 'La <strong>date de naissance</strong> a bien été modifiée. <br/>';
    }

    if (isset($_POST['new_company_name']) AND !empty($_POST['new_company_name'])) {
        $new_company_name = $_POST['new_company_name'];
        $user = $bdd->prepare('UPDATE users SET company_name = :new_company_name WHERE user_id = :user_id');
        $user->execute(array(
            'new_company_name' => $new_company_name,
            'user_id' => $modify,
        ));
        echo 'Le <strong>nom de l\'entreprise</strong> a bien été modifié. <br/>';
    }

    if (isset($_POST['new_employee_number']) AND !empty($_POST['new_employee_number'])) {
        $new_employee_number = $_POST['new_employee_number'];
        $user = $bdd->prepare('UPDATE users SET employee_number = :new_employee_number WHERE user_id = :user_id');
        $user->execute(array(
            'new_employee_number' => $new_employee_number,
            'user_id' => $modify,
        ));
        echo 'Le <strong>numéro employé</strong> a bien été modifié. <br/>';
    }

    if (isset($_POST['new_email']) AND !empty($_POST['new_email'])) {
        $new_email = $_POST['new_email'];
        $user = $bdd->prepare('UPDATE users SET email = :new_email WHERE user_id = :user_id');
        $user->execute(array(
            'new_email' => $new_email,
            'user_id' => $modify,
        ));
        echo 'L\'<strong>adresse email</strong> a bien été modifiée. <br/>';
    }

    if (isset($_POST['new_password']) AND !empty($_POST['new_password'])) {
        $new_password = $_POST['new_password'];
        $user = $bdd->prepare('UPDATE users SET password = :new_password WHERE user_id = :user_id');
        $user->execute(array(
            'new_password' => $new_password,
            'user_id' => $modify,
        ));
        echo 'Le <strong>mot de passe</strong> a bien été modifié. <br/>';
    }
}
?>