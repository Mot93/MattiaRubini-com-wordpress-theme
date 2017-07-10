<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */

/*Injected the header partial*/
get_header(); ?>

<div id = "single-post-content">
    
    <div class = "container-fluid">
        <div class = "container single-post-customization">
            
            <div class = "container">
                
                <h1><?php the_title(); ?></h1>
                <h4><?php echo get_the_date('d F Y'); ?></h4>
                
            </div>
            
            <div class = "container">
                <?php if ( have_posts() ) : //The beginning of "the loot" ?>
                    <?php while ( have_posts() ) : the_post(); //Default loop code ?>
            	
            			
            			
            			<p>
            			    <?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
            	        </p>
            	
                    <?php endwhile; ?>
            	<?php endif; ?>
            </div>
        
        </div>
    </div>

</div>
        
<!--Injected the footer partial-->
<?php get_footer(); ?>    