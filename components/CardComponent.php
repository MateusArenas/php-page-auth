<?php function CardComponent($props=[]) { 
    
?>
  <a href="#" class="list-group-item list-group-item-action">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1"><?php echo $props['name'] ?></h5>
      <small class="text-muted"><?php echo $props['time'] ?></small>
    </div>
    <p class="mb-1"><?php echo $props['email'] ?></p>
    <small class="text-muted">user id: <?php echo $props['id'] ?></small>
  </a>

<?php } ?>