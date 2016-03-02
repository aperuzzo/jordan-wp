<?php
/*
Template Name: Comics Page
*/



get_header(); ?>

<?php if ( have_posts() ) : ?>

		<?php $loop = new WP_Query( array( 
			'post_type' => 'comic'
			) ); 
		?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			

			<?php get_template_part( 'template-parts/content-comic', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php _tk_content_nav( 'nav-below' ); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>