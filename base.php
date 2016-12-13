<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
    <div class="red white-text alert-warning">
        <div class="container">
            <div class="col s12">
                You are using an <strong>outdated</strong> browser.
                <br>
                Please <a href="http://browsehappy.com/" class="black-text">upgrade your browser</a> to improve your experience.
            </div>
        </div>
    </div>
    <![endif]-->
 <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <main class="main">
        <?php include Wrapper\template_path(); ?>
    </main><!-- /.main -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
