<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	


	<div class="entry-content-comic">
		
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">',
				'after'  => '</div>',
				'link_before' => '<span class="page-link-number">',
				'link_after' => '</span>',
			) );
		?>
		<div class="remove-share"><?php the_excerpt(); ?></div>
		<div class="comic-links">
			<?php 
				if (get_field('comixology_link') || get_field('image_link')){
					echo '<h4>read '; 
					echo the_title(); 
					echo '  online at:</h4>';
				}

				if (get_field('comixology_link')) {
					echo '<a href="';
					echo get_field('comixology_link');
					echo '" target="_blank">Comixology</a>';

				}

				if (get_field('image_link')){
					echo '<a href="';
					echo get_field('image_link');
					echo '" target="_blank">Image Comics</a>';
				}
			?>
		</div> <!-- end comic-link -->
		<div class="comic-links">
			<?php 
				if ( get_field('amazon_link') || get_field('kindle_link')) {
					echo '<h4>purchase ';
					echo the_title();
					echo '  through:</h4>';
				}

				if ( get_field('amazon_link')){
					echo '<a href="';
					echo get_field('amazon_link');
					echo '" target="_blank">Amazon</a>';
				}

				if (get_field('kindle_link')){
					echo '<a href="';
					echo get_field('kindle_link');
					echo '" target="_blank">Kindle</a>';
				}

			?>
		</div> <!-- comic-links -->
		
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', '_tk' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', '_tk' ) );

			// if ( ! _tk_categorized_blog() ) {
			// 	// This blog only has 1 category so we just need to worry about tags in the meta text
			// 	if ( '' != $tag_list ) {
			// 		$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
			// 	} else {
			// 		$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
			// 	}

			// } else {
			// 	// But this blog has loads of categories so we should probably display them here
			// 	if ( '' != $tag_list ) {
			// 		$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
			// 	} else {
			// 		$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', '_tk' );
			// 	}

			// } // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
