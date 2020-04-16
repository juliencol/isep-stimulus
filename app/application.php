<?php 
  require_once('../config/routes.php');
  require_once('stylesheets/stylesheets.php');

  function __autoload($class_name) { 
    if (file_exists('classes/'.$class_name.'.php')) { 
      require_once 'classes/'.$class_name.'.php'; 
    } 
    if (file_exists('controllers/'.$class_name.'.php')) { 
      require_once 'controllers/'.$class_name.'.php'; 
    } 
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stimulus</title>
  <link rel="stylesheet" href="stylesheets/application.css?v=<?php echo time(); ?>">
</head>

<!-- IMPORTANT: do not code anything here, only import files -->
<body>
   <!--Code navbar component in app/components and import it here with require_once 'components/navbar.php';-->

  <!-- If user logged in  -->
    <!-- If is admin then log him in as an admin and redirect to admin page  --> 
    <!-- Else if is supervisor then log him in as a supervisor and redirect to supervisor page -->
    <!-- Else log him is as user and redirect to user page -->
  <!-- Else redirect to login page  -->

  <?php require_once 'views/users/home.php'; ?>

  <!--Code footer component in app/components and import it here with 'components/footer.php'; -->
</body>
</html>