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
        <title> STIMULUS - recherche</title>
        
    </head>

    <body>
        <?php include('header.php'); ?>
        

        <section id="research-page">

            <div class="container">

                <div id="titre-page">
                    <h1>Page de recherche</h1>
                </div>

                <?php 
                    require('../controllers/req-research.php');
                ?>

                <h3>Qui voulez-vous rechercher ?</h3>
                <form name="research-form" method="post" action="">
                    <input type="search" name="research" placeholder="Recherche..." />
                    <input type="submit" name="submit_research" value="Rechercher" />
                </form>

                <h4>Affiner la recherche : </h4>
                <form name="refine-form" method="get" action="">
                    <label>Sexe : </label>
                    <input type="radio" name="gender" value="female" id="female" /><label for="female"> Femme</label>
                    <input type="radio" name="gender" value="male" id="male" /><label for="male"> Homme</label>
                    <input type="radio" name="gender" value="other" id="other" /><label for="other"> Autre</label>

                    <label>Nom de l'entreprise :</label>
                    <input type="text" name="company" />

                    <input type="submit" name="submit_refine" id="submit_refine" value="Affiner" />
                </form>


                <br /><br />

                <?php 
                if (isset($results)) {

                    if($results->rowCount() > 0) {
                        echo '<h3>Résultats pour la recherche <em>' . $research . '</em></h3>';
                        echo '<ul>';

                        while ($r = $results->fetch()) { 
                            echo '<li><strong>' . $r['first_name'] . ' ' . $r['last_name'] . '</strong><br />';
                            echo 'Entreprise : ' . $r['company_name'] . '<br />'; 
                            echo 'Numéro employé : ' . $r['employee_number'] . '<br />';
                            echo 'Date de naissance : ' . $r['birthdate'] . " / Sexe : " . $r['gender'] . '<br />';
                            echo 'Email : ' . $r['email'] . '</li><br />';
                        }
                        echo '</ul>';
        
                    } else {
                        echo 'Aucun résultat pour <em>' . $research . '</em>.<br /><br />';
                    }
                }
                
                
                
                
                
                if (isset($_POST['submit_refine'])) {
                    if (isset($_POST['gender'])) {
                        if ($_POST['gender'] = 'female') {
                            
                            $female = $bdd->query('SELECT * FROM users WHERE gender = "F"'); 

                            echo '<ul>';
                            while ($r = $female->fetch()) { 
                                echo '<li><strong>' . $r['first_name'] . ' ' . $r['last_name'] . '</strong><br />';
                                echo 'Entreprise : ' . $r['company_name'] . '<br />'; 
                                echo 'Numéro employé : ' . $r['employee_number'] . '<br />';
                                echo 'Date de naissance : ' . $r['birthdate'] . " / Sexe : " . $r['gender'] . '<br />';
                                echo 'Email : ' . $r['email'] . '</li><br />';
                            }
                            echo '</ul>';
                        }
                    }
                }
                
                ?>



            </div>
        </section>

        
        <?php include('footer.php'); ?>
        

    </body>
    
</html>