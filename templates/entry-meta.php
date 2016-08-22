<p>
<div class="chip tooltipped" data-position="bottom" data-delay="50" data-tooltip="<?= get_the_date(); ?>">
	<a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="text-darken-4">
		<?php echo get_avatar( get_the_author_meta('ID') ); ?>
		<?= get_the_author(); ?></a>
</div>
</p>