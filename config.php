<?php 

  session_start();

  spl_autoload_register(function ($class_name) {

    $filename = "database".DIRECTORY_SEPARATOR.$class_name.".php";

    if (file_exists($filename)) {
      require_once($filename);
    }

  });

?>