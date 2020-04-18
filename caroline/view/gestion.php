<?php 
    include('../modele/connexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/header.css" />
        <link rel="stylesheet" href="_css/footer.css" />
        <link rel="stylesheet" href="_css/base.css" />
        <title> STIMULUS - gestion</title>
        
    </head>

    <body>
        <?php include('header.php'); ?>
        

        <section id="gestion-page">
            
            <div id="container">

                <div id="titre">
                    <h1>Gestion des utilisateurs</h1>
                </div>
                <br />

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
                } ?>


                <a href="add-user.php">Ajouter un utilisateur</a>

                <h3> Liste des utilisateurs </h3>

                <?php 
                $users = $bdd->query('SELECT * FROM users');
                $banned = $bdd->query('SELECT * FROM banned');
                

                echo '<ul>';
                while ($data = $users->fetch()) {
                    echo '<li><strong>' . $data['first_name'] . ' ' . $data['last_name'] . '</strong> - '; ?>
                    <a href="gestion.php?modify=<?= $data['user_id'] ?>">Modifier</a> -
                    <a href="gestion.php?delete=<?= $data['user_id'] ?>">Supprimer</a> -
                    <a href="gestion.php?ban=<?= $data['email'] ?>">Bannir</a>
                    <br />
                    <?php 
                    echo 'Entreprise : ' . $data['company_name'] . '<br />'; 
                    echo 'Numéro employé : ' . $data['employee_number'] . '<br />';
                    echo 'Date de naissance : ' . $data['birthdate'] . " / Sexe : " . $data['gender'] . '<br />';
                    echo 'Email : ' . $data['email'] . '</li><br />';   
                
                }
                echo '</ul>';
                $users->closeCursor();

                ?>

                <h3> Liste des adresses mails bannies </h3>

            

            </div>
        </section>

        
        <?php include('footer.php'); ?>
        

    </body>
    
</html>