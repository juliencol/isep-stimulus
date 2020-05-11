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
        <title> STIMULUS - gestion - modification</title>
        
    </head>

    <body>
        <?php require('header.php'); ?>
        

        <section id="gestion-page">
            
            <div class="container">

                <div class="titre-page">
                    <h1>Gestion des utilisateurs</h1>
                </div>
                <br />

                <h3> Modification d'un utilisateur </h3>

                <?php 
                if (isset($_GET['modify']) AND !empty($_GET['modify'])) {
                    require('../controllers/req-gestion-users-modify.php');
                    
                ?>
                    <br />

                    
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
                        <strong><?php echo $birthdate; ?></strong><br />
                        <label><em>Nouvelle date de naissance : </em></label> 
                        <input type="date" name="new_birthdate" id="new_birthdate" />
                        <br /><br />

                        <label>Nom de l'entreprise : </label>
                        <strong><?php echo $company_name; ?></strong><br />
                        <label><em>Nouveau nom de l'entreprise : </em></label> 
                        <input type="text" name="new_company_name" id="new_company_name" />
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

                        <label>Mot de passe : </label>
                        <strong><?php echo $password; ?></strong><br />
                        <label><em>Nouveau mot de passe : </em></label> 
                        <input type="password" name="new_password" id="new_password" />
                        <br /><br />

                        <input type="submit" name="submit_modify" id="submit_modify" value="Modifier" />
                        <br /><br />
                        
                    </form>

                <?php    
                } 
                $user->closeCursor();?>

                <div class="user-list">
                    <a href="gestion.php">Retour à la liste des utilisateurs</a>
                </div>
                <br /><br />


            </div>
        </section>

        
        <?php include('footer.php'); ?>
        

    </body>
    
</html>