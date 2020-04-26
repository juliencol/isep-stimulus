<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/sign_up.css'; ?> </style>


<div class="container">
  <h1>Créer un compte</h1>
  <div class="container sign-up-form-container">
    <form action="<?php echo URLROOT; ?>/users/sign_in" method="post">
      <div>
        <label for="last_name"><strong>Nom *</strong></label>
        <input type="text" name="name" class="<?php echo (!empty($data['last_name'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['last_name']; ?>">
        <span><?php echo $data['last_name']; ?></span>
      </div>
      <div>
        <label for="first_name"><strong>Prénom *</strong></label>
       <input type="text" name="name" class="<?php echo (!empty($data['first_name'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['first_name']; ?>">
        <span><?php echo $data['first_name']; ?></span>
      </div>
      <div>
        <label for="birthday_date"><strong>Data de naissance *</strong></label>
        <input type="date" name="birthday_date" <?php echo (!empty($data['birthday_date_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name'] ?>" >
        <span><?php echo $data['birthday_date_error']; ?></span>
      </div>
      <div>
        <label for="email"><strong>Adresse email *</strong></label>
        <input type="email" name="email" class="<?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
        <span><?php echo $data['email_error']; ?></span>
      </div>
      <div>
        <label for="password"><strong>Mot de passe *</strong></label>
        <input type="password" name="password" class="<?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
        <span><?php echo $data['password_error']; ?></span>
        <p>(doit contenir au moins 8 caratères dont 1 minuscule, 1 majuscule et 1 caractère spécial)</p>
      </div>
      <div>
        <label for="confirmed_password"><strong>Confirmation du mot de passe *</strong> </label>
       <input type="password" name="confirmed_password" class="<?php echo (!empty($data['confirmed_password_error'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirmed_password']; ?>">
        <span><?php echo $data['confirmed_password_error']; ?></span>
      </div>
      <div>
        <input type="submit" class="btn-primary" value="Confirmer">
      </div>
    </form>
  </div>
</div> 

<?php require APPROOT . '/views/inc/footer.php'; ?> 