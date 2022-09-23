
<?php 

  echo $_SESSION["email"];
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

  <body class="bg-success" >

      <?php include dirname(__FILE__)."/"."../components/HeaderMaster.php";
        HeaderMaster();
      ?>

      <div class="container-fluid text-center mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center p-5">
          <svg style="fill: white; width: 120px; height: 120px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
            <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
            <g><path d="M500,10C229.5,10,10,229.5,10,500c0,270.5,219.5,490,490,490c270.5,0,490-219.5,490-490C990,229.5,770.5,10,500,10z M500,908.3C274.4,908.3,91.7,725.6,91.7,500C91.7,274.4,274.4,91.7,500,91.7c225.6,0,408.3,182.7,408.3,408.3C908.3,725.6,725.6,908.3,500,908.3z"/><path d="M418.6,606.9L287.7,476.3L230,533.9l188.6,188.6L764.9,376l-57.7-57.7L418.6,606.9z"/></g>
          </svg>
          <h5 class="text-white py-2">login success</h5>
        </div>

        <a href="dashboard.php" class="btn btn-outline-light">Go to dashboard</a>
       
      </div>

  </body>

  <?php include dirname(__FILE__)."/"."../loaderBottomScripts.php";
    loaderBottomScripts();
  ?>
</html>