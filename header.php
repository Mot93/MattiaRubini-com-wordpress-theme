<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */
?>

<!--Body and HTML tags will be closed in the footer-->
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    
    <head>
        <!--The following code is standard procedure-->
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
        <!--from here on is personal tweaking-->
        
        <!--viewport introduced for a better mobile experience 
          more documentation at: https://www.w3schools.com/css/css_rwd_viewport.asp-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div id = "wrapper" >
            
            <header>
                
                <!--nav and div tag are the container of the header menu-->
                <nav id = "custom-navbar" class="navbar navbar-default custom-head-foot">
                    <div class="container">
                        
                        <!--Contain both the button on the top left and the button when it collapse-->
                        <div class="navbar-header">
                            
                            <!--Home ebutton on top left-->
                            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home <span class="sr-only">(current)</span></a> 
                            
                            <!--collapsed menu-->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              
                        </div><!--navbar-header-->
                        
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <!--Container of my link that are on the far right, they collapse with a small screen-->
                            <ul class="nav navbar-nav navbar-right ">
                                <!--This code inject the dynamic menu inside thge av bar-->
            					<!-- The Dynamic menu is managed in the admin section of word press-->
            					<?php 
            						wp_nav_menu( 
            							array(
            								/*must have this link to function.php
            								 *In function.php we defined this menu 'alphamenu'*/
            								'theme_location' => 'top-right-menu',
            								/*this line of code removes the default menu appearence*/
            								'container'      => false,
            								/*this line makes the menu with the same layout specified above 
            								 *(same as link 1 and 2)*/
            								'items_wrap'	 => '%3$s'
            							) 
            						); 
            					?>
                            </ul> <!--dynamic menu unordered list-->
                        </div> <!--dynamic menu div-->
                        
                    </div> <!--container-->
                </nav> <!--navigation bar-->
            
            </header>