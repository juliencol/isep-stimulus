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
            
            <div class="container">

                <div class="titre-page">
                    <h1>Gestion des utilisateurs</h1>
                </div>
                <br />

                <?php 
                    include('../controllers/req-gestion.php');
                ?>


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