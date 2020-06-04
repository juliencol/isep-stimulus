<?php session_start()?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/profile.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-photo">
            <img id="photo" class="profile-picture" src="https://res.cloudinary.com/isep/image/upload/v1587367413/stimulus/julien_ar3pu3.jpg"/>
        </div>
        <div class="col-info">
            <p>Nom: Colombain</p>
            <p>Prénom: Julien</p>
            <p>Date de naissance : 09/08/1999</p>
            <p>Numéro d'employé : 10484</p>
            <p>Entreprise : Isep</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="profile-btn">
            <a class="btn-primary"  href="<?php echo URLROOT; ?>tests">Tests</a>
            <a class="btn-primary" href="<?php echo URLROOT; ?>/users/test_results">Résultats</a>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
