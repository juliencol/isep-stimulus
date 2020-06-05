<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">

    <h1>Lancer test</h1>

    <?php 
            
    $bdd = new PDO('mysql:host=localhost;dbname=isep-stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $users = $bdd->query('SELECT * FROM users');
    $uID = $_GET['uID'];

    
    if (isset($uID) AND !empty($uID)) {
    
        while ($data = $users->fetch()) {
            if (($data['user_id'] == $uID)) {
                echo '<br/>Quels tests souhaitez-vous lancer pour <strong> ' . $data['first_name'] . ' ' . $data['last_name'] .'</strong> ?';
                $nb_test1 = $data['test1_to_do'];
                $nb_test2 = $data['test2_to_do'];
                $nb_test3 = $data['test3_to_do'];
            }
        }
    }
    echo '<br><br>';
    ?>

    <form method="POST" action="">
        <input type="checkbox" id="test1" name="test1" value="react-sound">
        <label for="test1"> Test de temps de réaction à un son</label><br>

        <input type="checkbox" id="test2" name="test2" value="repro-sound">
        <label for="test2"> Test de capacité à reproduire un son</label><br>

        <input type="checkbox" id="test3" name="test3" value="react-light">
        <label for="test3"> Test de temps de réaction à une lumière</label><br>
            
        <input type="submit" name="submit-tests" value="Envoyer">
    </form>

    <?php 

    if (isset($_POST['submit-tests']) ) {
    
        if (isset($_POST['test1']) ) {
            $nb_test1 += 1;

            $req = $bdd->prepare('UPDATE users SET test1_to_do = :nb_test1 WHERE user_id = :user_id');
            $req->execute(array(
                'nb_test1' => $nb_test1,
                'user_id' => $uID,
            ));
                        
            echo '<br/><br/>La notification du test a été envoyée. <br />';
        }
    }


    //affichage des notifs

    /*
    if (dans bdd user_test1 > 1) {

    }

    if ...
    */

    ?>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>