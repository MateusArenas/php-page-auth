<?php function CardComponent($props=[]) { 

  $fullname_array = explode(" ", $props['name']);

  $letters = "";

  foreach ($fullname_array as $letter) {
    $letters .= $letter[0];
  }
    
?>
  <a href="<?php echo "signin.php?email=".$props["email"]."&"."password=".$props["password"]; ?>" class="list-group-item list-group-item-action text-white <?php echo $props['active'] ? "active" : "bg-dark" ?> <?php echo $props['disabled'] ? "disabled" : "" ?>">
    <div class="d-flex flex-row w-100 py-2 pe-1">
      
      <div style="width: 62px; height: 62px; background-color: #0d6efd1a;" class="badge me-3 text-uppercase d-flex align-items-center justify-content-center fw-bold text-center text-primary border border-primary rounded-circle fs-2">
        <?php echo substr($letters, 0, 2) ?>
      </div>
      
      <div class="d-flex flex-column flex-fill">

        <!-- <div class="row justify-content-between">
          <div class="col-2 text-truncate">
            Praeterea iter est quasdam res quas ex communi.
          </div>
        </div> -->

        <div class="row justify-content-between flex-fill">
          <h5 class="col-7 mb-1 text-truncate"><?php echo $props['name'] ?></h5>
          <small class="col text-muted text-truncate text-end"><?php echo $props['time'] ?></small>
        </div>

        <p class="mb-1 text-truncate"><?php echo $props['email'] ?></p>
        <small class="text-muted">password: <?php echo $props['password'] ?></small>
      </div>

    </div>
  </a>

<?php } ?>