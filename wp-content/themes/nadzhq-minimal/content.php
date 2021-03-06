<?php 
/**
 * content.php
 *
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('grid'); ?>>
	
	<?php
		// If the post has a thumbnail and it's not password protected
		// then display the thumbnail
		if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<figure class="entry-thumbnail effect-ruby"><?php the_post_thumbnail(); ?></figure>
		<?php endif; ?>


	<div class="inner-content">

<header class="entry-header"> 
<?php
		// If single page, display the title
		// Else, we display the title in a link
		if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
		<?php else : ?>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php endif; ?>

	
			<?php 
				// Display the meta information
				nadzhq_minimal_post_meta();
			?>
	
	</header> <!-- end entry-header -->

	
	<!-- Article header -->

	<!-- Article content -->
	<div class="entry-content">
		<?php
			if ( is_search() ) {
				the_excerpt();
			} else {
				the_content( __( 'Read More', 'nadzhq-minimal' ) );

				wp_link_pages();
			}
		?>
	</div> <!-- end entry-content -->

	<!-- Article footer -->
	<footer class="entry-footer">
		<?php 
			// If we have a single page and the author bio exists, display it
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'nadzhq-minimal' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer> <!-- end entry-footer -->
	</div>
</article>