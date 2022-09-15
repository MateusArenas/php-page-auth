<?php require_once(dirname(__FILE__)."/"."../config.php"); 


  echo $_SESSION["email"];

  // require(dirname(__FILE__)."/"."../database/User.php"); 

  // $user1 = new User([ "name"=> "gene", "email"=> "gene@gmail.com" ]);
  // $user1->save();

  $users = User::find();

  // $db = new SQLite3($_SERVER['DOCUMENT_ROOT'].'/tmp/db.sqlite', SQLITE3_OPEN_READWRITE);

  // $results = $db->query('SELECT * FROM "db_users" ORDER BY "created_at" ASC');

  // while ($row = $results->fetchArray()) {
    // var_dump($row);
  // };
  
  // session_unset($_SESSION['email']);
  // echo $_SESSION['email'];
  // session_destroy();

  // echo session_id();
  // $users = $results->fetchArray();
  // echo json_encode($users);
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
      <?php include dirname(__FILE__)."/"."../components/HeaderMaster.php";
         HeaderMaster();
      ?>

      <div class="container">
        <h1 class="my-4">All users in php-example</h1>

        <div class="list-group  my-4">
  
          <?php require_once dirname(__FILE__)."/"."../components/CardComponent.php";
            foreach ($users as $user) {
              if (isset($_SESSION["email"]) ? $_SESSION["email"] : "" === $user["email"]) {
                CardComponent([ 
                  "id"=> $user["id"],
                  "email"=> $user["email"],
                  "name"=> $user["name"],
                  "password"=> $user["password"],
                  "created_at"=> $user["created_at"],
                  "disabled"=> false,
                  "active"=> true,
                  "time"=> date_format(date_create($user["created_at"]),"Y/m/d") 
                ]);
              }
            }
          ?>

        </div>
  
        <div class="list-group my-4">
  
          <?php require_once dirname(__FILE__)."/"."../components/CardComponent.php";
            foreach ($users as $user) CardComponent([ 
              "id"=> $user["id"],
              "email"=> $user["email"],
              "name"=> $user["name"],
              "password"=> $user["password"],
              "created_at"=> $user["created_at"],
              "disabled"=> isset($_SESSION["email"]) ? $_SESSION["email"] : "" === $user["email"],
              "active"=> false,
              "time"=> date_format(date_create($user["created_at"]),"Y/m/d") 
            ]);
          ?>
  
        </div>
        
      </div>
  </body>

  <?php include dirname(__FILE__)."/"."../loaderBottomScripts.php";
    loaderBottomScripts();
  ?>
</html>