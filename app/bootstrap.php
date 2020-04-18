<?php  
  // Load config
  require_once 'config/config.php';

  // Load libraries
  require_once 'libraries/core.php';
  require_once 'libraries/controller.php';
  require_once 'libraries/database.php';

  // Autoload core library
  spl_autoload_register(function($className) {
    require_once 'libraries/' . $className . '.php';
  })
?> 