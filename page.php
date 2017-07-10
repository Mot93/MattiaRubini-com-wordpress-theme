<?php
/**
 * Template Name: Default Page
 * 
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */

/*Injected the header partial*/
get_header(); ?>

<div id = "page-content">
    
    <div class = "container">
        <?php if ( have_posts() ) : //The beginning of "the loot" ?>
            <?php while ( have_posts() ) : the_post(); //Default loop code ?>
    	
    			<h1><?php the_title(); ?></h1>
    			
    			<p>
    			    <?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
                </p>
    	
            <?php endwhile; ?>
    	<?php endif; ?>
    </div>
    
</div>    
        
<!--Injected the footer partial-->
<?php get_footer(); ?>    