<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://use.fontawesome.com/1239367301.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css" >
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <title><?php echo SITENAME; ?></title>
</head>
<body>

  <?php require APPROOT . '/../public/css/style.php'; ?>
  <style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
  <style> <?php include APPROOT . '/../public/css/components/header.css'; ?> </style>

  <header>
    <div class="left-links">
      <a href="<?php echo URLROOT; ?>">
        <i class="fas fa-home"></i>
        <p>Accueil</p>
      </a>
      <a href="<?php echo URLROOT; ?>supervisors/search">
        <i class="fas fa-search"></i>
        <p>Rechercher</p>
      </a>
      <a href="<?php echo URLROOT; ?>supervisors/add_user">
        <i class="fal fa-user-cog"></i>
        <p>Gestion</p>           
      </a>
    </div>
    <div class="right-links">
      <a href="<?php echo URLROOT; ?>/users/notifications">
        <i class="far fa-bell"></i>
        <p>Notifications</p>
      </a>
      <a href="<?php echo URLROOT; ?>/users/profile">
        <i class="fas fa-user-circle"></i>
        <p>Profil</p>
      </a>
      <?php if(isset($_SESSION['user_id'])) : ?>
        <a href="<?php echo URLROOT; ?>/users/logout">
          <i class="fad fa-sign-out"></i>
          <p>Se déconnecter</p>
        </a>
      <?php else : ?>
        <a href="<?php echo URLROOT; ?>/users/sign_in">
          <i class="far fa-sign-in-alt"></i>
          <p>Se connecter</p>
        </a>
      <?php endif; ?>
    </div>
  </header> 
 