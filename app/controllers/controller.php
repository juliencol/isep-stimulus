<?php  
  class Controller extends Database {
    public static function CreateView($viewName) {
      require_once("./views/$viewName.php");
      echo $view_name;
    }
  }
?>       