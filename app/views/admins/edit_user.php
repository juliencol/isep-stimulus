<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="container">
    <h3> Modification d'un utilisateur </h3>
 
    <?php
        $bdd = new PDO('mysql:host=localhost;dbname=isep-stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        if (isset($_GET['modify']) AND !empty($_GET['modify'])) {
            $modify = $_GET['modify'];
            $user = $bdd->prepare('SELECT * FROM users WHERE id = ?');
            $user->execute(array($modify));

            while ($data = $user->fetch()) {
                $first_name = $data['first_name'];
                $last_name = $data['last_name'];
                $gender = $data['gender'];
                $birthday_date = $data['birthday_date'];
                $company = $data['company'];
                $employee_number = $data['employee_number'];
                $email = $data['email'];
            } 

            if (isset($_POST['submit_modify']) AND !empty($_POST['submit_modify'])) {

                if (isset($_POST['new_first_name']) AND !empty($_POST['new_first_name'])) {
                    $new_first_name = $_POST['new_first_name'];
                    $user = $bdd->prepare('UPDATE users SET first_name = :new_first_name WHERE id = :id');
                    $user->execute(array(
                        'new_first_name' => $new_first_name,
                        'id' => $modify,
                    ));

                    echo 'Le <strong>prénom</strong> a bien été modifié. <br />';
                }

                if (isset($_POST['new_last_name']) AND !empty($_POST['new_last_name'])) {
                    $new_last_name = $_POST['new_last_name'];
                    $user = $bdd->prepare('UPDATE users SET last_name = :new_last_name WHERE id = :id');
                    $user->execute(array(
                        'new_last_name' => $new_last_name,
                        'id' => $modify,
                    ));
                    echo 'Le <strong>nom</strong> a bien été modifié. <br/>';
                }

                if (isset($_POST['new_gender']) AND !empty($_POST['new_gender'])) {
                    $new_gender = $_POST['new_gender'];
                    $user = $bdd->prepare('UPDATE users SET gender = :new_gender WHERE id = :id');
                    $user->execute(array(
                        'new_gender' => $new_gender,
                        'id' => $modify,
                    ));
                    echo 'Le <strong>sexe</strong> a bien été modifié. <br/>';
                }

                if (isset($_POST['new_birthday_date']) AND !empty($_POST['new_birthday_date'])) {
                    $new_birthdday_ate = $_POST['new_birthday_date'];
                    $user = $bdd->prepare('UPDATE users SET birthday_date = :new_birthday_date WHERE id = :id');
                    $user->execute(array(
                        'new_birthday_date' => $new_birthday_date,
                        'id' => $modify,
                    ));
                    echo 'La <strong>date de naissance</strong> a bien été modifiée. <br/>';
                }

                if (isset($_POST['new_company']) AND !empty($_POST['new_company'])) {
                    $new_company = $_POST['new_company'];
                    $user = $bdd->prepare('UPDATE users SET company = :new_company WHERE id = :id');
                    $user->execute(array(
                        'new_company' => $new_company,
                        'id' => $modify,
                    ));
                    echo 'Le <strong>nom de l\'entreprise</strong> a bien été modifié. <br/>';
                }

                if (isset($_POST['new_employee_number']) AND !empty($_POST['new_employee_number'])) {
                    $new_employee_number = $_POST['new_employee_number'];
                    $user = $bdd->prepare('UPDATE users SET employee_number = :new_employee_number WHERE id = :id');
                    $user->execute(array(
                        'new_employee_number' => $new_employee_number,
                        'id' => $modify,
                    ));
                    echo 'Le <strong>numéro employé</strong> a bien été modifié. <br/>';
                }

                if (isset($_POST['new_email']) AND !empty($_POST['new_email'])) {
                    $new_email = $_POST['new_email'];
                    $user = $bdd->prepare('UPDATE users SET email = :new_email WHERE id = :id');
                    $user->execute(array(
                        'new_email' => $new_email,
                        'id' => $modify,
                    ));
                    echo 'L\'<strong>adresse email</strong> a bien été modifiée. <br/>';
                }
            }
        }
        ?>
    <form method="post" action="">
        <label>Prénom : </label>
        <strong><?php echo $first_name; ?></strong><br />
        <label><em>Nouveau prénom :</em> </label> 
        <input type="text" name="new_first_name" id="new_first_name" />
        <br /><br />

        <label>Nom : </label>
        <strong><?php echo $last_name; ?></strong><br />
        <label><em>Nouveau nom : </em></label> 
        <input type="text" name="new_last_name" id="new_last_name" />
        <br /><br />


        <label>Sexe : </label>
        <strong><?php echo $gender; ?></strong><br />
        <label><em>Nouveau sexe : </em></label> 
        <input type="radio" name="new_gender" id="new_female" value="F" /><label for id="female"> Femme</label>
        <input type="radio" name="new_gender" id="new_male" value="M" /><label for id="male"> Homme</label>
        <input type="radio" name="new_gender" id="new_other" value="A" /><label for id="other"> Autre</label>
        <br /><br />

        <label>Date de naissance : </label>
        <strong><?php echo $birthday_date; ?></strong><br />
        <label><em>Nouvelle date de naissance : </em></label> 
        <input type="date" name="new_birthday_date" id="new_birthday_date" />
        <br /><br />

        <label>Nom de l'entreprise : </label>
        <strong><?php echo $company; ?></strong><br />
        <label><em>Nouveau nom de l'entreprise : </em></label> 
        <input type="text" name="new_company" id="new_company" />
        <br /><br />

        <label>Numéro employé : </label>
        <strong><?php echo $employee_number; ?></strong><br />
        <label><em>Nouveau numéro employé : </em></label> 
        <input type="number" name="new_employee_number" id="new_employee_number" />
        <br /><br />
        
        <label>Email : </label>
        <strong><?php echo $email; ?></strong><br />
        <label><em>Nouvel email : </em></label> 
        <input type="text" name="new_email" id="new_email" />
        <br /><br />

        <input type="submit" name="submit_modify" id="submit_modify" value="Modifier" />
        <br /><br />
                    
    </form>

    <div class="user-list">
        <a href="./manage_user">Retour à la liste des utilisateurs</a>
    </div>

</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>