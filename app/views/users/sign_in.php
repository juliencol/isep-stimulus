<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/sign_in.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
    <p class="text-center"><?php flash('register_success'); ?></p>
    <h1>Se connecter en tant qu'utilisateur</h1>
    <div class="container sign-in-form-container">
        <form action="<?php echo URLROOT; ?>/users/sign_in" method="post">
            <div class="under-container">
                <div>
                    <label for="name"><strong>Adresse email *</strong></label>
                    <input type="email" name="email" class="<?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <p><span class="error-message"><?php echo $data['email_error']; ?></span></p>
                </div>
                <div>
                    <label for="name"><strong>Mot de passe *</strong></label>
                    <input type="password" name="password" class="<?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <p><span class="error-message"><?php echo $data['password_error']; ?></span></p>
                </div>
            </div> 
            <div>
                <input type="submit" class="btn-primary" value="Confirmer">
            </div>
        </form>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>

