
<?php require_once(dirname(__FILE__)."/"."../database/User.php"); 

   function display() {
      // global User;

      // $user = new User([ "name"=> "gene", "email"=> "gene@gmail.com" ]);
      // $user->save();
    
      // $results = User::find();
    
      // echo json_encode($results);
   //   echo "hello: ".$_POST["email"];
     echo "hello: ".$_SERVER['REQUEST_METHOD'];
   }

   if($_SERVER['REQUEST_METHOD']=='POST') {
      display();
   } 
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

   <body style="background-color: #0d3642;">

      <?php include dirname(__FILE__)."/"."../components/HeaderMaster.php";
         HeaderMaster();
      ?>

   <div class="container py-4 bottom-tab-content-offset" >
      <div class="row g-0 my-4 align-items-center justify-content-center">
      <span style="width: 126px; height: 68px; box-sizing: border-box; display: inline-block; overflow: hidden; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
         <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
         <img alt="" aria-hidden="true" src="/images/logo.png" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
         </span>
      </span>
      </div>
      <div class="row align-items-center justify-content-center mt-0 mt-lg-3">
         <div class="col-11 col-md-7 col-lg-5">
            <div class="card bg-transparent text-white">
               <div class="card-header text-center p-3">
                  <h1 class="fs-4 mb-0">Sign up to php-example</h1>
               </div>
               <div class="card-body">
                  <form>
                     <div class="mb-3"><label for="exampleInputEmail1" class="form-label">Name</label><input type="username" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp"></div>
                     <div class="mb-3"><label for="exampleInputEmail1" class="form-label">Email</label><input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : "" ?>"></div>
                     <div class="row">
                        <div class="col-12 col-lg-6">
                           <div class="mb-3"><label for="exampleInputPassword1" class="form-label">Password</label><input type="password" class="form-control" id="exampleInputPassword1" name="password" ></div>
                        </div>
                        <div class="col-12 col-lg-6">
                           <div class="mb-3"><label for="exampleInputPassword1" class="form-label">Confirm</label><input type="password" class="form-control" id="exampleInputPassword1" name="confirmpass"></div>
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