<?php require_once(dirname(__FILE__)."/"."../config.php");

  function display() {
    $user = User::login($_POST["email"], $_POST["password"]);

    if ($user !== false) {
      session_start();

      $_SESSION["email"] = $_POST["email"];
      header("Location: dashboard.php");
    }
    
    // echo json_encode($user);
  }

  if($_SERVER['REQUEST_METHOD']=='POST') {
    display();
  } 
?>