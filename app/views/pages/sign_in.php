<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/pages/sign_in.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container text-center sign-in-main-container">
  <h1>Se connecter</h1>
  <p>Vous êtes ?</p>
  <div class="btn-container">
    <a class="btn-primary" href="<?php echo URLROOT; ?>users/sign_in">Utilisateur</a>
    <a class="btn-primary" href="<?php echo URLROOT; ?>supervisors/sign_in">Gestionnaire</a>
    <a class="btn-primary" href="<?php echo URLROOT; ?>admins/sign_in">Administrateur</a>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>