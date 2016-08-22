<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <?php if (Setup\display_sidebar()) : ?>
          <main class="main col s12 m9 l10">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
          <aside class="sidebar col s12 m3 l2">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
          <?php else : ?>
          <main class="main col s12">
            <?php include Wrapper\template_path(); ?>
          </main><!-- /.main -->
        <?php endif; ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    <?php if ( ! is_admin() ) { ?>
      <div class="fixed-action-btn horizontal click-to-toggle" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red">
          <i class="material-icons">add</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>
    <?php } ?>

  </body>
</html>
