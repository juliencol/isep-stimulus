<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/pages/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="banner">
</div>

<div class="container main-container">
  <div class="container login-container">
    <div class="container container-left">
      <p>Vous souhaitez consulter vos résultats ?</p>
      <p><strong>Connectez vous !</strong></p>
      <a href="<?php echo URLROOT; ?>/users/sign_in" class="btn-primary">Se connecter</a>
    </div>
     <div class="container container-right">
      <p>Pas encore de compte chez nous ?</p>
      <p><strong>Inscrivez vous !</strong></p>
      <a href="<?php echo URLROOT; ?>/users/sign_up" class="btn-primary">S'inscrire</a>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
