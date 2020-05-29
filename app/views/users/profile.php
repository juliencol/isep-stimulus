<?php session_start()?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/profile.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container profile-container">
    <a class="btn-primary" href="<?php echo URLROOT; ?>/users/notifications">Notifications</a>
    <h2>Profil Utilisateur</h2>
     <img id="photo" class="profile-picture" src="https://res.cloudinary.com/isep/image/upload/v1587367413/stimulus/julien_ar3pu3.jpg"/>
    <p>Nom: Colombain</p>
    <?php
    if(isset($_POST["email"])) {
        echo $_POST["email"];
    } else {
        echo "Pas d'email entré";
    }?><br>
    <p>Prénom: Julien</p>
    <p>Date de naissance : 09/09/1999</p>
    <p>Numéro d'employé : 10484</p>
    <p>Entreprise : Isep</p>
    <button>Modifier le profil</button>
    <div class="profile-btn">
        <a class="btn-primary"  href="<?php echo URLROOT; ?>tests">Tests</a>
        <a class="btn-primary" href="<?php echo URLROOT; ?>/users/test_results">Résultats</a>
    </div>
</div>

<?php $_SESSION["email"] = $_POST["email"];
$_SESSION["mdp"] = $_POST["mdp"]?>

<?php require APPROOT . '/views/inc/footer.php'; ?>
