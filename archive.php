<?php

/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skele
 * @since Skele 1.0
 */



get_header(); ?>

    <?php if (have_posts()) : ?>
        
        <?php rewind_posts(); ?>

        <?php /* Start the Loop */ ?>

        <?php
            $parentCatName = single_cat_title('', false);
            $parentCatID = get_cat_ID($parentCatName);
            $childCats = get_categories('child_of=' . $parentCatID);
                        
            while (have_posts()) : the_post();

                /* Include the Post-Format-specific template for the content.
                * If you want to overload this in a child theme then include a file
                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                */

                if (in_category($parentCatName)) {
                    the_content();
                }

            endwhile;

            if (is_array($childCats)) {

                foreach($childCats as $child){ ?>

                    <div id="intro" class="segment sixteen columns clearfix">
                        <h1><?php echo $child->name . ' ' . $parentCatName;?></h1>
                    </div>

                    <div class="clearfix">
                        <?php query_posts('cat=' . $child->term_id . "& showposts=-1 & order=DESC");
                        while (have_posts()) : the_post(); $do_not_duplicate = $post->ID; ?>
                            <?php

                                /* Include the Post-Format-specific template for the content.
                                 * If you want to overload this in a child theme then include a file
                                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                 */

                                get_template_part('content-abstract', get_post_format());
                            ?>
                        <?php endwhile; wp_reset_query(); ?>
                    </div>
                <?php }
            }?>

    <?php else : ?>

        <?php get_template_part('no-results', 'archive'); ?>

    <?php endif; ?>

<?php get_footer(); ?>