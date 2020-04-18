<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/sign_up.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Créer un compte</h1>
  <div class="container sign-up-form-container">
    <form action="<?php echo URLROOT; ?>/users/sign_in" method="post">
      <div>
        <label for="name"><strong>Nom *</strong></label>
        <input type="text" name="name" <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name'] ?>" >
        <span><?php echo $data['name_error']; ?></span>
      </div>
      <div>
      <div>
        <label for="name"><strong>Prénom *</strong></label>
        <input type="text" name="name" <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name'] ?>" >
        <span><?php echo $data['name_error']; ?></span>
      </div>
      <div>
        <label for="name"><strong>Data de naissance *</strong></label>
        <input type="date" name="name" <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name'] ?>" >
        <span><?php echo $data['name_error']; ?></span>
      </div>
        <label for="name"><strong>Adresse email *</strong></label>
        <input type="text" name="name" <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name'] ?>" >
        <span><?php echo $data['name_error']; ?></span>
      </div>
      <div>
        <label for="name"><strong>Mot de passe *</strong></label>
        <input type="password" name="name">
        <p>(doit contenir au moins 8 caratères dont une minuscule, une majuscule et un caractère spécial)</p>
      </div>
      <div>
        <label for="name"><strong>Confirmation du mot de passe *</strong> </label>
        <input type="password" name="name">
      </div>
      <div>
        <input type="submit" class="btn-primary" value="Confirmer">
      </div>
    </form>
  </div>
</div> 

<?php require APPROOT . '/views/inc/footer.php'; ?> 