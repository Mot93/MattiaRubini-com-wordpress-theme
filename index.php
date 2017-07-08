<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */

<!--Injected the header partial-->
<?php get_header(); ?>

<div id = "content" >
    <div class = "jumbotron index-jumbotron-customization">
        <div class = "container">
            <div id = "home-header" class = "row">
                
                <img src="<?php bloginfo('template_url'); ?>/images/profile-pic.jpg" class="img-responsive col-xs-4" alt="Profile Pic">
                <h1 class = "col-xs-8">Mattia's Blog</h1>
                
            </div>
        </div>
    </div>
    
    <div class = "container">
        <?php if ( have_posts() ) : //The beginning of "the loot" ?>
            <?php while ( have_posts() ) : the_post(); //Default loop code ?>
    	
    			<?php the_title( sprintf( '<h2 class = "entry-title"><a href = "%s" rel = "bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); /*The title is a link to the contenent*/ ?>
    			<?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
    	
            <?php endwhile; ?>
    	<?php endif; ?>
    </div>
</div>

<!--Injected the footer partial-->
<?php get_footer(); ?>      