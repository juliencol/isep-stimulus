<?php 
    if (isset($_POST['submit_add']) AND !empty($_POST['submit_add'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birthdate = $_POST['birthdate'];
        $company_name = $_POST['company_name'];
        $employee_number = $_POST['employee_number'];

        $req = $bdd->prepare('INSERT INTO users(first_name ,last_name, gender, email, password, birthdate, company_name, employee_number) VALUES(:first_name, :last_name, :gender, :email, :password, :birthdate, :company_name, :employee_number)');
        $req->execute(array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'gender' => $gender,
            'email' => $email,
            'password' => $password,
            'birthdate' => $birthdate,
            'company_name' => $company_name,
            'employee_number' => $employee_number
        ));

        echo 'L\'utilisateur <strong>' . $first_name . ' ' . $last_name . '</strong> a bien été ajouté ! <br /><br />';
    }
?>