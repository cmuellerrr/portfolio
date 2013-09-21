<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Skele
 * @since Skele 1.0
 */

get_header(); ?>

    <div id="intro" class="segment clearfix">
        <div class="four columns">
            <img id="portrait" class="circular" src="<?php echo get_template_directory_uri(); ?>/images/portrait.jpg" alt="this is me"/>
        </div>
        <div class="twelve columns">
            <h1 id="greeting">hi.  i'm chris - an interaction designer who loves making stuff. and by 'stuff' i mean <em>awesome</em> stuff.</h1>
        </div>
    </div>

    <div class="clearfix">
        <div class="eight columns offset-by-four">
            <hr class="dotted"/>
        </div>
    </div>

    <div id="featured" class="segment clearfix">
        <h2 id="featured_work">Featured work</h2>
        <div class="clearfix">
            <?php
                // The Query
                query_posts('tag=featured');

                // The Loop
                while ( have_posts() ) : the_post();
                    get_template_part('content-abstract', get_post_format());
                endwhile;

                // Reset Query
                wp_reset_query();
            ?>
        </div>
        <h2 id="see_more">See more>></h2>
    </div>

    <div class="clearfix">
        <div class="eight columns offset-by-four">
            <hr class="dotted"/>
        </div>
    </div>

    <div id="about" class="segment clearfix">
        <div class="ten columns">
            <h2>About</h2>
            <p>I like making things that are fun and I'm excited about the intersection of music, art, and technology. In general, I just want to help make the world a more magical place.</p>
            <p>I'm currently living in Pittsburgh, PA pursuing a Masters of Human-Computer Interaction at <b>Carnegie Mellon University</b>.</p>
        </div>
        <div class="five columns offset-by-one">
            <h2>Formalities</h2>
            <p>Check out my <b><a href="http://www.iammueller.com/wp/wp-content/uploads/2013/01/resume.pdf" target="_blank">resume</a></b></p>
            <p>To get in touch, send me an email: <b>chris[at]iammueller.com</b></p>
            <p>Also, you can follow me on these:</p>
                        
            <a class="social" href="http://www.linkedin.com/in/cmuellerrr" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/linkedin.png" alt="Link to LinkedIn"/>
            </a>
            <a class="social" href="https://www.github.com/cmuellerrr" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/github.png" alt="Link to GitHub"/>
            </a>
            <a class="social" href="https://twitter.com/cmuellerrr" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/icons/twitter.png" alt="Link to Twitter"/>
            </a>
        </div>
    </div>

<?php get_footer(); ?>