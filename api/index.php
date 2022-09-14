
<?php 
//  define('ROOT_PATH', dirname($_SERVER['DOCUMENT_ROOT']));

// echo "DOCUMENT_ROOT: ".$_SERVER['DOCUMENT_ROOT'];
// echo "ROOT_PATH: ".$_SERVER['ROOT_PATH'];
// header('Location: ../dashboard');

  $headers = [[ "name" => "gene"] , ["name" => "mateus"]];

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
        // foreach ($headers as $header) HeaderMaster($header);
      ?>

      <div class="container-fluid py-5">
        <div class="row align-items-center px-md-5">
            <div class="col-12 col-md-6">
              <div class="row justify-content-start">
                  <div class="card border-0 bg-transparent text-white">
                    <div class="card-header bg-transparent border-0 text-muted">power by ( php, html & css and bootstrap )</div>
                    <div class="card-body">
                        <h1 class="card-title">Let's build from here, together.</h1>
                        <p class="card-text">Create an account to test login, sign up and session.</p>
                        <form class="row g-2" method="get" action="signup.php">
                          <div class="col-12 col-md-8">
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                          </div>
                          <div class="col-12 col-md-4">
                            <button class="btn h-100 w-100 btn-primary app-bg-primary border-0" type="submit" >Sign Up</button>
                          </div>
                        </form>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-12 col-md-6">
              <div class="row justify-content-end px-4">
                  <span style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%">
                    <span style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%">
                      <img style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27569%27%20height=%27555%27/%3e">
                    </span>
                    <img alt="image-profile" src="/images/banner.png" decoding="async" data-nimg="intrinsic" class="img-fluid rounded" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:65%;max-height:100%" >
                  </span>
              </div>
            </div>
        </div>
      </div>

  </body>

  <?php include dirname(__FILE__)."/"."../loaderBottomScripts.php";
    loaderBottomScripts();
  ?>
</html>