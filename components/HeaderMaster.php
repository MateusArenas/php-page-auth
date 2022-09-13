<?php function HeaderMaster($props=[]) { 

?>
      <header class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="/" class="navbar-brand text-muted">php-example</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarToggleExternalContent">
                <div class="me-auto navbar-nav">
                    <!-- <a href="#features" data-rr-ui-event-key="#features" class="nav-link">Features</a><a href="#pricing" data-rr-ui-event-key="#pricing" class="nav-link">Pricing</a> -->
                    <!-- <div class="nav-item dropdown"><a id="collasible-nav-dropdown" aria-expanded="false" role="button" class="dropdown-toggle nav-link" tabindex="0" href="#">Dropdown</a></div> -->
                </div>
                <div class="navbar-nav"><a href="signin.php" data-rr-ui-event-key="#deets" class="nav-link me-2">Sign In</a><a href="signup.php" data-rr-ui-event-key="2" class="btn btn-outline-light">Sign Up</a></div>
                </div>
            </div>
            <hr class="w-100 bg-secondary opacity-10 m-0 position-absolute bottom-0">
        </nav>
      </header>
<?php } ?>