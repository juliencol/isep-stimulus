<?php  
  class Controller extends Database {
    public static function CreateView($controllerName, $viewName) {
      require_once("./views/$controllerName/$viewName.php");
    }
  }
?>       