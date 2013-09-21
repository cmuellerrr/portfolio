<?php
/**
 * @package Skele
 * @since Skele 1.0
 */
?>


<div id="post-<?php the_ID(); ?>" class="abstract four columns">
	<?php if (has_post_thumbnail()) {
		echo '<a href="' . get_permalink($page->ID) . '">';
		echo get_the_post_thumbnail($page->ID, 'thumbnail');
		echo '</a>';
	}?>
    <p class="abstract-title"><a href="<?php the_permalink(); ?>" rel="featured"><?php the_title(); ?></a></p>
	<?php echo '<p class="abstract-excerpt">' . get_the_excerpt() . '</p>'; ?>
</div>