<nav>
  <div class="container">
  <div class="nav-wrapper">
    <a class="brand-logo" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'right hide-on-med-and-down']);
    endif;
    ?>
  </div>
  </div>
</nav>