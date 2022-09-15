
<?php ?>

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

  <body class="bg-danger">

      <?php include dirname(__FILE__)."/"."../components/HeaderMaster.php";
        HeaderMaster();
      ?>

      <div class="container-fluid text-center mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center p-5">
          <svg style="fill: white; width: 120px; height: 120px;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
            <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
            <g><path d="M153.5,846.5c-191.3-191.3-191.3-501.6,0-692.9c191.4-191.3,501.6-191.3,693,0c191.3,191.3,191.3,501.6,0,692.9C655.1,1037.8,344.9,1037.8,153.5,846.5z M759.9,240.1c-143.6-143.5-376.2-143.5-519.7,0c-143.6,143.5-143.6,376.2,0,519.7c143.5,143.5,376.2,143.5,519.7,0C903.4,616.3,903.4,383.7,759.9,240.1z M370.1,716.5l-86.6-86.6L413.4,500L283.5,370.1l86.6-86.6L500,413.4l129.9-129.9l86.6,86.6L586.6,500l129.9,129.9l-86.6,86.6L500,586.6L370.1,716.5z"/></g>
          </svg>
          <h5 class="text-white py-2">login failure</h5>
        </div>

        <a href="dashboard.php" class="btn btn-outline-light">Go to dashboard</a>
       
      </div>

  </body>

  <?php include dirname(__FILE__)."/"."../loaderBottomScripts.php";
    loaderBottomScripts();
  ?>
</html>