<?php if(has_nav_menu('primary_navigation')): ?>
  <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'echo' => false]); ?>

  <div class="nav-search" tabindex=0>
    <i class="material-icons md-24" style="margin-top:10px; color:black">search</i>
  </div>
<?php endif; ?>
