<?php 
  require_once('../../config/routes.php');

  function __autoload($class_name) { 
    if (file_exists('../../classes/'.$class_name.'.php')) { require_once '../../classes/'.$class_name.'.php'; }
    if (file_exists('../controllers/'.$class_name.'.php')) { require_once '../controllers/'.$class_name.'.php'; }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stimulus</title>
  <link rel="stylesheet" href="../../stylesheets/application.css">
</head>

<body>
  <div class="container">
    <h1 class="stimulus-title">Cite waibe de Stimulusse</h1>
    <p>Wesh la time sa va ou koi</p>
    <p>Gabriel t vrémen le boss</p>
  </div>
</body>
</html>