<?php require_once(dirname(__FILE__)."/"."../config.php"); 

   function display() {
      $user = new User([ "name"=> $_POST["name"], "email"=> $_POST["email"], "password"=> $_POST["password"] ]);
      $ok = $user->save();

      if ($ok) {
        session_start();

        $_SESSION["email"] = $_POST["email"];
        header("Location: dashboard.php");
      }
   }

   if($_SERVER['REQUEST_METHOD']=='POST') {
      if ($_POST["password"] === $_POST["confirmpass"]) {
         display();
      }
   } 

?>