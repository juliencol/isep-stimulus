<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/sign_up.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?> 

<div class="container">
  <h1>Créer un compte</h1>
  <div class="sign-up-form-container">
    <form action="<?php echo URLROOT; ?>/users/sign_up" method="post">
      <div>
        <label for="last_name"><strong>Nom *</strong></label>
        <input type="text" name="last_name" class="<?php echo (!empty($data['last_name'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['last_name']; ?>">
        <p><span class="error-message"><?php echo $data['last_name_error']; ?></span></p>
      </div>
      <div>
        <label for="first_name"><strong>Prénom *</strong></label>
       <input type="text" name="first_name" class="<?php echo (!empty($data['first_name'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['first_name']; ?>">
       <p><span class="error-message"><?php echo $data['first_name_error']; ?></span></p>
      </div>
      <div>
        <label for="birthday_date"><strong>Data de naissance *</strong></label>
        <input type="date" name="birthday_date" <?php echo (!empty($data['birthday_date_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['last_name'] ?>" >
        <p><span class="error-message"><?php echo $data['birthday_date_error']; ?></span></p>
      </div>
      <div>
        <label for="email"><strong>Adresse email *</strong></label>
        <input type="email" name="email" class="<?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
        <p><span class="error-message"><?php echo $data['email_error']; ?></span></p>
      </div>
      <div>
        <label for="password"><strong>Mot de passe *</strong></label>
        <input type="password" name="password" class="<?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
        <p>(8 caratères minimum dont 1 minuscule, 1 majuscule et 1 caractère spécial)</p>
        <p><span class="error-message"><?php echo $data['password_error']; ?></span></p>
      </div>
      <div>
        <label for="confirmed_password"><strong>Confirmation du mot de passe *</strong> </label>
        <input type="password" name="confirmed_password" class="<?php echo (!empty($data['confirmed_password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirmed_password']; ?>">
        <p><span class="error-message"><?php echo $data['confirmed_password_error']; ?></span></p>
      </div>
      <div class="link">
        <input type="submit" class="btn-primary" value="Confirmer">
      </div>
      <div class="link">
        <a href="<?php echo URLROOT; ?>/pages/sign_in">Déjà un compte ? Se connecter</a>
      </div>
    </form>
  </div>
</div> 

<?php require APPROOT . '/views/inc/footer.php'; ?> 