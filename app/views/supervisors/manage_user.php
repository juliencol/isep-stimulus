<?php 
    require('../modele/connexion.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/header.css" />
        <link rel="stylesheet" href="_css/footer.css" />
        <link rel="stylesheet" href="_css/base.css" />
        <title>Gestion des utilisateurs</title>
        
    </head>

    <body>
        <?php include('../view/_templates/header-admin.php'); ?>
        
        <section id="gestion-users-page">
            
            <div class="container">

                <div class="titre-page">
                    <h1>Gestion des utilisateurs</h1>
                </div>
                <br />

                <?php 
                    require('../controllers/req-gestion-users.php');
                ?>
                


                <a href="gestion-users-add.php">Ajouter un utilisateur</a>

                <h3> Liste des utilisateurs </h3>

                <?php 
                $users = $bdd->query('SELECT * FROM users');
                $banned = $bdd->query('SELECT * FROM banned');
                

                echo '<ul>';
                while ($data = $users->fetch()) {
                    echo '<li><strong>' . $data['first_name'] . ' ' . $data['last_name'] . '</strong> - '; ?>
                    <a href="gestion-users-modify.php?modify=<?= $data['user_id'] ?>">Modifier</a> -
                    <a href="gestion-users.php?delete=<?= $data['user_id'] ?>">Supprimer</a> -
                    <?php if (isBan($data['email'])) { ?>
                        [banni] -
                        <a href="gestion-users.php?deban=<?= $data['email'] ?>">Débannir</a>
                    <?php 
                    }
                    else { ?>
                        <a href="gestion-users.php?ban=<?= $data['email'] ?>">Bannir</a>
                        <?php
                    } ?>
                    

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
                <?php 
                $banned_list = $bdd->query('SELECT * FROM banned');

                echo '<ul>'; 
                while ($data = $banned_list->fetch()) {
                    echo '<li>' . $data['email'] . '</li>';
                }
                echo '</ul>';

                ?>
            

            </div>
        </section>
        <br /><br />

        
        <?php include('../view/_templates/footer.php'); ?>
        

    </body>
    
</html>