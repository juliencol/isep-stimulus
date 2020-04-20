<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://use.fontawesome.com/1239367301.js"></script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css" >
  <title><?php echo SITENAME; ?></title>
</head>

<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/components/navbar.css'; ?> </style>

<header>
  <div id="container">
    <div id="navbar">
      <div id="navbar_menu">
        <a  href="<?php echo URLROOT; ?>">
          <img src="https://res.cloudinary.com/isep/image/upload/v1587367510/stimulus/home_qzkvgi.png" alt ="home-icon" target ="_blank" title = "Accueil" class="home-icon"/>
          <p>Accueil</p>
        </a>
        <a href="equipe.php">
          <img src="https://res.cloudinary.com/isep/image/upload/v1587367404/stimulus/brain_ni8lum.png" alt ="brain-icon" target ="_blank" title = "Brain" class="brain-icon"/>
          <p>Qui sommes-nous</p>
      </a>
      <a href="research.php">
        <img src="https://res.cloudinary.com/isep/image/upload/v1587367404/stimulus/research_ld6bxk.png" alt ="research-icon" target ="_blank" title = "Research" class="research-icon"/>
        <p>Rechercher</p>
      </a>
      <a href="gestion.php">
        <img src="https://res.cloudinary.com/isep/image/upload/v1587367404/stimulus/gestion_xzzsii.png" alt ="gestion-icon" target ="_blank" title = "Gestion" class="gestion-icon"/>
        <p>Gestion</p>           
      </a>
      </div>
      <div id="navbar_profil">
        <a href="<?php echo URLROOT; ?>/users/profile">
          <img src="https://res.cloudinary.com/isep/image/upload/v1587367404/stimulus/profile_nsnmkh.png" alt ="profile-icon" target ="_blank" title = "Profile" class="profile-icon"/>
          <p>Profil</p>
        </a>
      </div>
    </div>
  </div>
</header>
<body>