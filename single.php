<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Skele
 * @since Skele 1.0
 */

get_header(); ?>

	<?php while (have_posts()) : the_post(); ?>

		<?php the_content(); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>