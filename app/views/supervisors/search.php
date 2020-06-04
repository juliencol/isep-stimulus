<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <h1>Page de recherche</h1>

    <?php

        $db = new PDO('mysql:host=localhost;dbname=stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        if (isset($_POST['research']) AND !empty($_POST['research'])) {
            $research = htmlspecialchars($_POST['research']);
            $company = htmlspecialchars($_POST['company']);
        
        
            if (isset($_POST['company']) AND !empty($_POST['company'])) {
                echo '<br/><em>Affiner par : <strong>' . $company . '</strong></em>';
            }
        
            else if (isset($_POST['gender']) AND !empty($_POST['gender'])) {
        
                if($_POST['gender'] == 'female') { 
                    $results = $db->query('SELECT * FROM users WHERE (gender="F") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                    echo '<br/><em>Affiner par : <strong>Femme</strong></em>';
                }
          
                else if ($_POST['gender'] == 'male') {
                    $results = $db->query('SELECT * FROM users WHERE (gender="M") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
                    echo '<br/><em>Affiner par : <strong>Homme</strong></em>';
        
                }
        
                else if ($_POST['gender'] == 'other') {
                    $results = $db->query('SELECT * FROM users WHERE (gender="A") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
                    echo '<br/><em>Affiner par : <strong>Autre</strong></em>';
        
                }
        
            }
      
        
            else if (isset($_POST['gender']) AND !empty($_POST['gender']) AND isset($_POST['company']) AND !empty($_POST['company'])) {
        
                if($_POST['gender'] == 'female') { 
                    $results = $db->query('SELECT * FROM users WHERE (gender="F") AND (company="' . $company . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                    echo '<br/><em>Affiner par : <strong>Femme</strong>, <strong>' . $company . '</strong></em>';
                }
        
                else if($_POST['gender'] == 'male') { 
                    $results = $db->query('SELECT * FROM users WHERE (gender="M") AND (company="' . $company . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                    echo '<br/><em>Affiner par : <strong>Homme</strong>, <strong>' . $company . '</strong></em>';
                }
                
                else if ($_POST['gender'] == 'other') {
                    $results = $db->query('SELECT * FROM users WHERE (gender="A") AND (company="' . $company . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                    echo '<br/><em>Affiner par : <strong>Autre</strong>, <strong>' . $company . '</strong></em>';
                }
                
            }
                
            else {
                $results = $db->query('SELECT * FROM users WHERE (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
            }
            
        }
        
        else if (isset($_POST['gender']) AND !empty($_POST['gender']) AND isset($_POST['company']) AND !empty($_POST['company'])) {
            $research = htmlspecialchars($_POST['research']);
            $company = htmlspecialchars($_POST['company']);
        
            if($_POST['gender'] == 'female') { 
                $results = $db->query('SELECT * FROM users WHERE (gender="F") AND (company="' . $company . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Femme</strong>, <strong>' . $company . '</strong></em>';
            }
        
            else if($_POST['gender'] == 'male') { 
                $results = $db->query('SELECT * FROM users WHERE (gender="M") AND (company="' . $company . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Homme</strong>, <strong>' . $company . '</strong></em>';
            }
            
            else if ($_POST['gender'] == 'other') {
                $results = $db->query('SELECT * FROM users WHERE (gender="A") AND (company="' . $company . '") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") '); 
                echo '<br/><em>Affiner par : <strong>Autre</strong>, <strong>' . $company . '</strong></em>';
            }
            
        }
        
        else if (isset($_POST['gender']) AND !empty($_POST['gender'])) {
            $research = htmlspecialchars($_POST['research']);
            $company = htmlspecialchars($_POST['company']);
        
            if($_POST['gender'] == 'female') { 
                $results = $db->query('SELECT * FROM users WHERE (gender="F")'); 
                echo '<br/><em>Affiner par : <strong>Femme</strong></em>';
            }
        
            else if ($_POST['gender'] == 'male') {
                $results = $db->query('SELECT * FROM users WHERE (gender="M") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
                echo '<br/><em>Affiner par : <strong>Homme</strong></em>';
            }
        
            else if ($_POST['gender'] == 'other') {
                $results = $db->query('SELECT * FROM users WHERE (gender="A") AND (first_name LIKE "' . $research . '%" OR last_name LIKE "' . $research . '%") ');
                echo '<br/><em>Affiner par : <strong>Autre</strong></em>';
            }
        
        }
        
        else if (isset($_POST['company']) AND !empty($_POST['company'])) {
            $research = htmlspecialchars($_POST['research']);
            $company = htmlspecialchars($_POST['company']);
            
            $results = $db->query('SELECT * FROM users WHERE (company="' . $company . '")'); 
            echo '<br/><em>Affiner par : <strong>' . $company . '</strong></em>';
        
        }
        
        
    
    ?>

    <div class="research">     

        <form method="post" action="">

            <h3>Qui voulez-vous rechercher ?</h3>
            
            <div class="research-bar">
                <input type="search" name="research" value="<?php if (isset($research)) { echo $research; }?>" placeholder="Rechercher..."/> <?php //récupère la dernire recherche ?>
            </div>

            <div class="research-refine">
                <p> Sexe :
                <input type="radio" name="gender" value="female" id="female" /><label for="female"> Femme</label>
                <input type="radio" name="gender" value="male" id="male" /><label for="male"> Homme</label>
                <input type="radio" name="gender" value="other" id="other" /><label for="other"> Autre</label>
                </p>

                <p>Nom de l'entreprise :
                <input type="text" name="company" />
                </p>
            </div>

            <input type="submit" name="submit_research" value="Rechercher" />

        </form>
    </div>



    <br /><br />

    <div class="research-table">

        <?php 
        if (isset($results) AND !empty($results)) {
            

            if($results->rowCount() > 0) {
                echo '<h3>Résultats de la recherche <em>' . $research . '</em></h3>';

                echo "<table border='1'>";
                echo "<tr> <th>Nom</th> <th>Sexe</th> <th>Date de naissance</th><th>Entreprise</th> <th>Numéro employé</th> <th>Email</th> <th>Lancer test</th> </tr>";
                while ($r = $results->fetch()) { 
                    echo '<tr> 
                    <td>' . $r['first_name'] . ' ' . $r['last_name'] . '</td> 
                    <td>' . $r['gender'] . '</td> <td>' . $r['birthday_date'] . '</td> 
                    <td>' . $r['company'] . '</td> 
                    <td>' . $r['employee_number'] . '</td> 
                    <td>' . $r['email'] . '</td> 
                    <td> <a href="launch-test.php?uID=' . $r['id'] . '">Lancer un test</a> </tr>';
                    
                }
                echo "</table> <br/><br/>";

            } else {
                echo 'Aucun résultat.<br /><br />';
            }
        }
        ?>
    </div>
</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>

