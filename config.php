<?php session_start();

  spl_autoload_register(function ($class_name) {

    $filename = "database".DIRECTORY_SEPARATOR.$class_name.".php";

    if (file_exists(dirname(__FILE__).DIRECTORY_SEPARATOR.$filename)) {
      require_once($filename);
    }

  });

?>