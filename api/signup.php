<?php require_once(dirname(__FILE__)."/"."../config.php"); 

   $dafault_email = isset($_GET["email"]) ? $_GET["email"] : "";
   // require_once(dirname(__FILE__)."/"."../config.php"); 

   // require(dirname(__FILE__)."/"."../database/User.php"); 

   // function display() {
      // global User;
      // echo $_SERVER['DOCUMENT_ROOT']."/php-page-auth".'/tmp/db.sqlite';
      // chmod($_SERVER['DOCUMENT_ROOT'].'/tmp/db.sqlite', 0664);
      // chmod($_SERVER['DOCUMENT_ROOT'].'/php-page-auth'.'/tmp/db.sqlite', '0777');

      // $isval = chmod($_SERVER['DOCUMENT_ROOT'].'/data/db.sqlite', 0777);

      // echo $isval ? "ok" : "droga!";

      // $db = new SQLite3($_SERVER['DOCUMENT_ROOT']."/php-page-auth".'/tmp/db.sqlite', SQLITE3_OPEN_READWRITE);

      // $db->query('CREATE TABLE IF NOT EXISTS "db_users" (
      //    "id" INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
      //    "name" VARCHAR,
      //    "email" VARCHAR,
      //    "created_at" TIMESTAMP DEFAULT CURRENT_TIMESTAMP
      // )');

      // $statement = $db->prepare('INSERT INTO "db_users" ("email", "name") VALUES (:email, :name)');
      // $statement->bindValue(':email', $_POST["email"]);
      // $statement->bindValue(':name', $_POST["name"]);
      // $statement->execute();


      // $user = new User([ "name"=> $_POST["name"], "email"=> $_POST["email"], "password"=> $_POST["password"] ]);
      // $ok = $user->save();

      // $results = User::find();
//   
      // echo json_encode($results);

      // if ($ok) {
         // $_SESSION["email"] = $_POST["email"];
         // header("Location: dashboard.php");
      // }


      // echo $_SERVER['REQUEST_METHOD'];

      // header("Location: ".dirname(__FILE__)."/dashboard.php")

      // $results = User::find();
    
      // echo json_encode($results);
      // echo "hello: ".$_POST["email"];
      // echo "hello: ".$_SERVER['REQUEST_METHOD']." : ".$user->id;
   // }

   // if($_SERVER['REQUEST_METHOD']=='POST') {
   //    if ($_POST["password"] === $_POST["confirmpass"]) {
   //       display();
   //    }
   // } 

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

   <body style="background-color: #043150;">


      <?php include dirname(__FILE__)."/"."../components/HeaderMaster.php";
         HeaderMaster();
      ?>

   <div class="container py-4 bottom-tab-content-offset" >
      <div class="row g-0 mb-4 align-items-center justify-content-center">
         <a class="text-center" href="https://www.php.net/releases/8.1/en.php" target="_blank">
            <span style="width: 126px; height: 68px; box-sizing: border-box; display: inline-block; overflow: hidden; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
               <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
               <img alt="" aria-hidden="true" src="<?php echo getimagebasepath("/images/logo.png"); ?>" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
            </span>
         </a>
      </span>
      </div>
      <div class="row align-items-center justify-content-center mt-0 mt-lg-3">
         <div class="col-11 col-md-7 col-lg-5">
            <div class="card bg-transparent text-white">
               <div class="card-header text-center p-3">
                  <h1 class="fs-4 mb-0">Sign up to php-example</h1>
               </div>
               <div class="card-body">
                  <form method="post" action="validate-signup.php">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input placeholder="full name" type="username" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
                     </div>
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input placeholder="name@example.com" value="<?php echo $dafault_email ?>" type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" >
                     </div>
                     <div class="row">
                        <div class="col-12 col-lg-6">
                           <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input placeholder="*****" type="password" class="form-control" id="exampleInputPassword1" name="password" >
                           </div>
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                              <input placeholder="*****" type="password" class="form-control" id="exampleInputPassword1" name="confirmpass">
                           </div>
                        </div>
                     </div>
                     <button type="submit" class="w-100 btn btn-primary">Create Account</button>
                  </form>
               </div>
               <div class="card-footer text-center p-3">
                  <p class="mb-0">Already have account to php-example? <a class="text-decoration-none" href="signin.php">Sign In</a> .</p>
               </div>
            </div>
         </div>
      </div>
   </div>

   </body>

   <?php include dirname(__FILE__)."/"."../loaderBottomScripts.php";
      loaderBottomScripts();
   ?>

</html>