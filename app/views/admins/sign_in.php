<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/admins/sign_in.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Se connecter en tant qu'administrateur </h1>
  <div class="container sign-in-form-container">
    <form action="<?php echo URLROOT; ?>/users/sign_in" method="post">
      <div class="under-container">
        <div>
          <label for="name"><strong>Adresse email *</strong></label>
          <input type="text" name="name" <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''; ?> value="<?php echo $data['name'] ?>" >
          <span><?php echo $data['name_error']; ?></span>
        </div>
        <div>
          <label for="name"><strong>Mot de passe *</strong></label>
          <input type="password" name="name">
        </div>
      </div>
      <div>
        <input type="submit" class="btn-primary" value="Confirmer">
      </div>
    </form>
  </div>
</div> 

<?php require APPROOT . '/views/inc/footer.php'; ?>