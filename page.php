<!--Injected the header partial-->
<?php get_header(); ?>

<div id = "main-body">

    <h1>Page</h1>
    
    <div class = "container">
        <?php if ( have_posts() ) : //The beginning of "the loot" ?>
            <?php while ( have_posts() ) : the_post(); //Default loop code ?>
    	
    			<h1><?php the_title(); ?></h1>
    			<?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
    	
            <?php endwhile; ?>
    	<?php endif; ?>
    </div>
    
</div>    
        
<!--Injected the footer partial-->
<?php get_footer(); ?>    