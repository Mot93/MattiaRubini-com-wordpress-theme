<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */

/*Injected the header partial*/
get_header(); ?>

<div id = "content">
    
    <div class = "container">
        <?php if ( have_posts() ) : //The beginning of "the loot" ?>
            <?php while ( have_posts() ) : the_post(); //Default loop code ?>
    	
    			<h1><?php the_title(); ?></h1>
    			
    			<h3>
    			    <?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
    	        </h3>
    	
            <?php endwhile; ?>
    	<?php endif; ?>
    </div>

</div>
        
<!--Injected the footer partial-->
<?php get_footer(); ?>    