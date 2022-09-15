<?php require_once(dirname(__FILE__)."/"."../config.php");

  function display() {
    $user = User::login($_POST["email"], $_POST["password"]);

    if ($user !== false) {
      $_SESSION["email"] = $_POST["email"];
      exit(header("Location: auth-success.php"));
    } else {
      exit(header("Location: auth-failure.php"));
    }
    
  }

  if($_SERVER['REQUEST_METHOD']=='POST') {
    display();
  } 
?>