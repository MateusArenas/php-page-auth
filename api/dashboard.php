<?php require_once(dirname(__FILE__)."/"."../config.php"); 

  // require(dirname(__FILE__)."/"."../database/User.php"); 

  $users = User::find();
  
  // session_unset($_SESSION['email']);
  // echo $_SESSION['email'];
  // session_destroy();

  // echo session_id();
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include dirname(__FILE__)."/"."../loaderStyleSheets.php";
        loaderStyleSheets();
    ?>

    <title>Hello, world!</title>

  </head>

  <body>
      <h1>after form action, redict self to this page</h1>

      <div class="list-group">

        <?php include dirname(__FILE__)."/"."../components/CardComponent.php";
          foreach ($users as $user) CardComponent([ 
            ...$user, 
            "time"=> date_format(date_create($user["created_at"]),"Y/m/d H:i:s") 
          ]);
        ?>

      </div>
  </body>

  <?php include dirname(__FILE__)."/"."../loaderBottomScripts.php";
    loaderBottomScripts();
  ?>
</html>