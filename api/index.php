<?php require_once(dirname(__FILE__)."/"."../config.php"); 
  $headers = [[ "name" => "gene"] , ["name" => "mateus"]];
?>

<?php function RenderHeadComponent($props=[]) { ?>
  <title>HOME</title>
  <style>
      @media (max-width:768px)  { 
        .position-sm-only-absolute {
          opacity: .75 !important; 
          /* margin-bottom: 16px; */
        }
        
        .position-sm-only-absolute .logo-content {
          width: 160px !important;
          height: 160px !important;
          scale: 2.1 !important;
        }
      }
    </style>
<?php } ?>

<?php function RenderComponent($props=[]) { ?>
  <main style="background-color: #043150;">
    <a href="product">cagaio</a>

      <div class="container-fluid py-4 py-md-5">
        <div class="row align-items-center px-md-5">
            <div class="col-12 col-md-6 order-2 order-md-1" style="z-index: 2;">
              <div class="row position-relative justify-content-start">
                  <div class="card border-0 bg-transparent text-white">
                    <div class="card-header bg-transparent border-0 text-muted pb-0">
                      <a href="dashboard.php" class="text-decoration-none">Go to dashboard</a>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title fw-semibold">Let's build from here, together.</h1>
                        <p class="card-text mb-4 text-muted">A criação de conta é somente local, devido a vercel não permitir escrita nos arquivos.</p>
                        <form class="row g-2" method="get" action="signup">
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
            <div class="col-12 col-md-6 order-1 order-md-2 position-sm-only-absolute" style="z-index: 1;">
              <div class="row overflow-hidden justify-content-center justify-content-md-end px-4">
                <a class="text-center" href="https://www.php.net/docs.php" target="_blank">
                  <span class="logo-content" style="box-sizing:border-box;display:inline-block;overflow:hidden;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;position:relative;max-width:100%">
                    <span style="box-sizing:border-box;display:block;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0;max-width:100%">
                      <img style="display:block;max-width:100%;width:initial;height:initial;background:none;opacity:1;border:0;margin:0;padding:0" alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%27569%27%20height=%27555%27/%3e">
                    </span>
                    <img alt="image-profile" src="/images/banner.png" onerror="this.src='https://php-page-auth.vercel.app/images/banner.png'" decoding="async" data-nimg="intrinsic" class="img-fluid rounded" style="position:absolute;top:0;left:0;bottom:0;right:0;box-sizing:border-box;padding:0;border:none;margin:auto;display:block;width:0;height:0;min-width:100%;max-width:100%;min-height:65%;max-height:100%" >
                  </span>
                </a>
              </div>
            </div>
        </div>
      </div>
  </main>
<?php } ?>