<div class="col s12">
  <div <?php post_class('card'); ?>>
    <div class="card-content">
      <span class="card-title"><?php the_title(); ?></span>
      <?php get_template_part('templates/entry-meta'); ?>
      <p><?php the_excerpt(); ?></p>
    </div>
    <div class="card-action">
      <a href="<?php the_permalink(); ?>">Read more</a>
    </div>
  </div>
</div>