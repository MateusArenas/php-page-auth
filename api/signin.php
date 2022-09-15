
<?php require_once(dirname(__FILE__)."/"."../config.php"); 

  // function display() {
  //   $user = User::login($_POST["email"], $_POST["password"]);

  //   if ($user !== false) {
  //     // $_SESSION["email"] = $_POST["email"];
  //     header("Location: dashboard.php");
  //   }
    
  //   echo json_encode($user);
  // }

  // if($_SERVER['REQUEST_METHOD']=='POST') {
  //   display();
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

  <body style="background-color: #0d3642;">

      <?php include dirname(__FILE__)."/"."../components/HeaderMaster.php";
          HeaderMaster();
      ?>

      <div class="container py-4 bottom-tab-content-offset">

        <div class="row g-0 mb-4 align-items-center justify-content-center">
            <span style="width: 126px; height: 68px; box-sizing: border-box; display: inline-block; overflow: hidden; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
              <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;">
                <img alt="" aria-hidden="true" src="<?php echo getimagebasepath("/images/logo.png"); ?>" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;">
              </span>
            </span>
          </div>
        <div class="row justify-content-center mt-0 mt-lg-3">
            <div class="col-11 col-md-7 col-lg-5">
              <div class="card bg-transparent text-white">
                  <div class="card-header text-center p-3">
                    <h1 class="fs-4 mb-0">Sign in to php-example</h1>
                  </div>
                  <div class="card-body">
                    <form method="post" action="validate-signin.php">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">email</label>
                          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <a class="text-decoration-none float-end" href="signin.php">Forgot password?</a>
                          <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="w-100 btn btn-primary">Sign In</button>
                    </form>
                  </div>
                  <div class="card-footer text-center p-3">
                    <p class="mb-0">New to php-example? <a class="text-decoration-none" href="signup.php">Create account</a> .</p>
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