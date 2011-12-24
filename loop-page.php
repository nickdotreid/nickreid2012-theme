<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
	<?php roots_post_before(); ?>
	<?php roots_post_inside_before(); ?>
	<h1><?php the_title(); ?></h1>
	<div class="container content">
		<?php the_content(); ?>
	</div>
	<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>' )); ?>
	<?php roots_post_inside_after(); ?>
	<?php roots_post_after(); ?>
<?php endwhile; // End the loop ?>
