<!--Injected the header partial-->
<?php get_header(); ?>

<div class = "jumbotron">
    
    <h1>Welcome to the home page</h1>
    
</div>

<div class = "container">
    <?php if ( have_posts() ) : //The beginning of "the loot" ?>
        <?php while ( have_posts() ) : the_post(); //Default loop code ?>
	
			<?php the_title( sprintf( '<h2 class = "entry-title"><a href = "%s" rel = "bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); /*The title is a link to the contenent*/ ?>
			<?php the_content(); /*How much contenent to show is decided by the word press admin section*/?>
	
        <?php endwhile; ?>
	<?php endif; ?>
</div>
        
<!--Injected the footer partial-->
<?php get_footer(); ?>      
