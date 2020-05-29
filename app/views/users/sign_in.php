<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/sign_in.css'; ?> </style>


<div class="container">
    <h1>Se connecter en tant qu'utilisateur</h1>
    <div class="container sign-in-form-container">
        <form action="<?php echo URLROOT; ?>/users/profile" method="post">
            <div class="under-container">
                <div>
                    <label for="name"><strong>Adresse email *</strong></label>
                    <input type="email" name="email" >
                    <?php
                    ?>
                </div>
                <div>
                    <label for="name"><strong>Mot de passe *</strong></label>
                    <input type="password" name="mdp">
                </div>
            </div>
            <div>
                <a href="<?php echo URLROOT; ?>/users/profile" class="btn-primary" >Confirmer</a>
            </div>
            <input type="submit">
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>


