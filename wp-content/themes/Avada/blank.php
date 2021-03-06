<?php
/**
 * Template Name: Blank Page
 * A simple template for blank pages.
 *
 * @package Avada
 * @subpackage Templates
 */

?>

<?php

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>
<div id="content" class="full-width">
	<?php while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php echo wp_kses_post( fusion_render_rich_snippets_for_pages() ); ?>
			<?php avada_featured_images_for_pages(); ?>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	<?php endwhile; ?>
</div>
<?php get_footer();

/* Omit closing PHP tag to avoid "Headers already sent" issues. */
