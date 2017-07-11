<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */

/*Injected the header partial*/
get_header(); ?>

<div id="single-post-content">
    
    <div class="container-fluid row">
        
        <!--Using push and pull from bootstrap grid system coloumn ordering
            Coloumn change order when in mobile to get on top the advertisement
            push-3 col-1->col-1->col-1->  
            pull-4 <-col-1<-col-1<-col-2
            col and push moves the elements around
            -->
        
        <div class="container col-md-2 col-md-push-9">
            <?php dynamic_sidebar( 'blog_single_sidebar' ); /*injecting the widget bar*/?>
        </div><!--widget container-->
        
        <div class="container single-post-customization col-md-8 col-md-pull-1">
            
            <div class="container blog-content-overflowing">
                
                <h1><?php the_title(); ?></h1>
                <h4><?php echo get_the_date('d F Y'); ?></h4>
                
            </div><!--Container of the title and date = "meta" content-->
            
            <div class="container blog-content-overflowing">
                <?php if ( have_posts() ) : //The beginning of "the loot" ?>
                    <?php while ( have_posts() ) : the_post(); //Default loop code ?>
            			
            			<p>
            			    <?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
            	        </p>
            	
                    <?php endwhile; ?>
            	<?php endif; ?>
            </div><!--Container of the post content-->
            
        </div><!--container of both meta and content-->
        
        
        
    </div><!--container of both the blog post and the widget bar-->

</div><!--Al post contenent container-->
        
<!--Injected the footer partial-->
<?php get_footer(); ?>    