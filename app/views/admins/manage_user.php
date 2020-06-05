<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>

<?php require APPROOT . '/views/inc/header_admin.php'; ?>
        
            
<div class="container">

     <h1>Gestion des utilisateurs</h1>

    <?php 
        $bdd = new PDO('mysql:host=localhost;dbname=stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        $users = $bdd->query('SELECT * FROM users');

        if (isset($_GET['delete']) AND !empty($_GET['delete'])) {
            $delete = $_GET['delete'];
        
            $req = $bdd->prepare('DELETE FROM users WHERE id = ?');
            $req->execute(array($delete));
        
            echo 'L\'utilisateur a été supprimé. <br /><br />'; 
        }


        if (isset($_GET['ban']) AND !empty($_GET['ban'])) {
            $ban = $_GET['ban'];
        
            while ($data = $users->fetch()) {
                if (isBan($ban)) {
                }
        
                else {
                    $req = $bdd->prepare('INSERT INTO banned(email) VALUES(:email)');
                    $req-> execute(array('email' => $ban));
                    echo 'L\'adresse <em>' . $ban . '</em> a bien été banni. <br/>';
                }
            }
        }
        $users->closeCursor();
        
        
        
        
        if (isset($_GET['deban']) AND !empty($_GET['deban'])) {
            $deban = $_GET['deban'];
            $req = $bdd->prepare('DELETE FROM banned WHERE email = ?');
            $req->execute(array($deban));
        
            echo 'L\'adresse ' . $deban . ' a été débannie. <br /><br />'; 
        }
        
        
        
        
        
        
        
        
        
        function isBan($ban) {
            $bdd = new PDO('mysql:host=localhost;dbname=isep-stimulus;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $banned_emails = $bdd->prepare('SELECT * FROM banned WHERE email = ?');
            $banned_emails->execute(array($ban));
            $exist = $banned_emails->rowCount();
        
            if ($exist != 0) {
                return true; // true = oui c'est ban
            }
        }
    ?>
    


    <a href="./add_user">Ajouter un utilisateur</a>

    <h3> Liste des utilisateurs </h3>

    <?php 
    $users = $bdd->query('SELECT * FROM users');
    $banned = $bdd->query('SELECT * FROM banned');
    

    echo '<ul>';
    while ($data = $users->fetch()) {
        echo '<li><strong>' . $data['first_name'] . ' ' . $data['last_name'] . '</strong> - '; ?>
        <a href="./edit_user?modify=<?= $data['id'] ?>">Modifier</a> -
        <a href="./manage_user?delete=<?= $data['id'] ?>">Supprimer</a> -
        <?php if (isBan($data['email'])) { ?>
            [banni] -
            <a href="./manage_user?deban=<?= $data['email'] ?>">Débannir</a>
        <?php 
        }
        else { ?>
            <a href="./manage_user?ban=<?= $data['email'] ?>">Bannir</a>
            <?php
        } ?>
        

        <br />
        <?php 
        echo 'Entreprise : ' . $data['company'] . '<br />'; 
        echo 'Numéro employé : ' . $data['employee_number'] . '<br />';
        echo 'Date de naissance : ' . $data['birthday_date'] . " / Sexe : " . $data['gender'] . '<br />';
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
<?php require APPROOT . '/views/inc/footer.php'; ?>