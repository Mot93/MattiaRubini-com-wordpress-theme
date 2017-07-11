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

/*Injected the header partial*/
get_header(); ?>

<div id = "index-content" >
    <div class = "jumbotron index-jumbotron-customization">
        <div class = "container">
            <div id = "home-header" class = "row">
                
                <img src="<?php bloginfo('template_url'); ?>/images/profile-pic.jpg" class="img-responsive col-sm-3" alt="Profile Pic">
                <div class = "col-sm-9">
                    
                    <!--Non customizable -->    
                    <h1>Mattia's Blog</h1>
                    <h4>Welcome to my personal website, I hope you'll find it of your liking.</h4>
                    <h4>If you don't it's too late :D</h4>
                    
                    <!--customizable field
                    <h1><?php /*echo get_post_meta( get_the_ID(), 'Homepage-Title', true ); */?></h1>
                    <h4><?php /*echo get_post_meta( get_the_ID(), 'Homepage-Sub-Title', true ); */?></h4>
                    -->
                
                </div>
                
            </div><!--home header / row-->
        </div><!--container-->
    </div><!--jumbotron / header container-->
    
    <div class = "container">
        <?php if ( have_posts() ) : //The beginning of "the loot" ?>
            <?php while ( have_posts() ) : the_post(); //Default loop code ?>
    	
    			<?php the_title( sprintf( '<h2 class = "entry-title"><a href = "%s" rel = "bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); /*The title is a link to the contenent*/ ?>
    			<p>
    			    <?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
    			</p>
    	
            <?php endwhile; ?>
    	<?php endif; ?>
    </div><!--Posts container-->
</div><!--index container-->

<!--Injected the footer partial-->
<?php get_footer(); ?>      