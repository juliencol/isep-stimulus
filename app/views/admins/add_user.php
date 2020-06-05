<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header_admin.php'; ?>

<div class="container">

    <h1>Gestion des utilisateurs</h1>

    <div id="add-section">
        <h3> Ajouter un utilisateur</h3>

        <?php 
            $bdd = new PDO('mysql:host=localhost;dbname=stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            if (isset($_POST['submit_add']) AND !empty($_POST['submit_add'])) {
                $first_name = $_POST['first_name'];
                $last_name = $_POST['last_name'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                
                $birthday_date = $_POST['birthday_date'];
                $company = $_POST['company'];
                $employee_number = $_POST['employee_number'];

                $req = $bdd->prepare('INSERT INTO users(first_name ,last_name, gender, email, birthday_date, company, employee_number) VALUES(:first_name, :last_name, :gender, :email, :birthday_date, :company, :employee_number)');
                $req->execute(array(
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'gender' => $gender,
                    'email' => $email,
                    'birthday_date' => $birthday_date,
                    'company' => $company,
                    'employee_number' => $employee_number
                ));

                echo 'L\'utilisateur <strong>' . $first_name . ' ' . $last_name . '</strong> a bien été ajouté ! <br /><br />';
            }
        ?>

        <form method="post" action="">
            <label>Nom : </label>
            <input type="text" name="last_name" id="last_name" placeholder="Dupont" required />
            <br />

            <label>Prénom : </label>
            <input type="text" name="first_name" id="first_name" placeholder="Jean" required />
            <br />

            <label>Sexe : </label>
            <input type="radio" name="gender" id="female" value="F" required /><label for id="female"> Femme</label>
            <input type="radio" name="gender" id="male" value="M" required /><label for id="male"> Homme</label>
            <input type="radio" name="gender" id="other" value="A" required /><label for id="other"> Autre</label>
            <br /> 

            <label>Email : </label>
            <input type="text" name="email" id="email" placeholder="jeandupont@email.com" required />
            <br />

            <label>Date de naissance : </label>
            <input type="date" name="birthday_date" id="birthday_date" min="1900-01-01" placeholder="1999-01-01" required />
            <br />

            <label>Nom de l'entreprise : </label>
            <input type="text" name="company" id="company" placeholder="Dupont Corporation" required />
            <br />

            <label>Numéro employé : </label>
            <input type="number" name="employee_number" id="employee_number" maxlength="5" placeholder="12345" required />
            <br /><br />    

            <input type="submit" class="btn-primary" name="submit_add" id="submit_add" value="Ajouter" />

        </form>
    </div>

    <div class="user-list">
        <a class="btn-primary" href="./manage_user">Retour à la liste des utilisateurs</a>
    </div>  

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
    

        
      