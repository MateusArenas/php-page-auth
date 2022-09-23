<?php session_start();

  spl_autoload_register(function ($class_name) {

    $filename = "database".DIRECTORY_SEPARATOR.$class_name.".php";

    if (file_exists(dirname(__FILE__).DIRECTORY_SEPARATOR.$filename)) {
      require_once($filename);
    }

  });

  function getimagebasepath ($basepath) {
    if (file_exists($basepath)) {
      return $basepath;
    }
    return "https://php-page-auth.vercel.app".$basepath;
  }

?>