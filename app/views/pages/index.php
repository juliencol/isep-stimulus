<?php require_once APPROOT . '/../app/config/config.php'; ?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/pages/index.css'; ?> </style>

<?php require APPROOT . '/views/inc/header.php'; ?>

<div class="container">
  <h1>Infinite Measures</h1>
  <p>Le système qui vous aide à mesurer vos réflexes</p>
  <img src="https://www.assurementauto.fr/images/dossiers/2020-03/jeune-conducteur-145844.jpg" alt="">
  <div class="middle-container">
    <div class="container-left">
      <p class="cta">Consulter vos résultats ?</p>
      <a href="<?php echo URLROOT; ?>pages/sign_in" class="btn-primary">Se connecter</a>
    </div>
     <div class="container-right">
      <p class="cta">Pas encore de compte ?</p>
      <a href="<?php echo URLROOT; ?>users/sign_up" class="btn-primary">S'inscrire</a>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>