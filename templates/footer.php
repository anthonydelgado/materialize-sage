<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text"><?php echo get_bloginfo( 'name' ); ?></h5>
        <p class="grey-text text-lighten-4"><?php echo get_bloginfo( 'description' ); ?></p>
      </div>
      <div class="col l4 offset-l2 s12 white-text">
        <?php dynamic_sidebar('sidebar-footer'); ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
      <a class="grey-text text-lighten-4" href="<?php echo get_bloginfo( 'url' ); ?>"> &copy; <?php echo date("Y") ?> <?php echo get_bloginfo( 'name' ); ?></a>
    </div>
  </div>
</footer>
