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
    </head>
    
    <body>
        
        <header class>
            
            <div class = "container">
                
                <div class = "row">
                
                    <h4 class = "col-xs-8">If you want to check out the source code of this wordpress theme </h6>
                    
                    <a href="https://github.com/Mot93/MattiaRubini-com-wordpress-theme" class="btn btn-default btn-lg active col-xs-4" role="button" target="_blank">click here to reach the github folder</a>
                
                </div>
                
            </div>
            
            <!--nav and div tag are the container of the header menu-->
            <nav id = "custom-navbar" class="navbar navbar-default">
                <div class="container">
                    
                    <!--Contain both the button on the top left and the button when it collapse-->
                    <div class="navbar-header">
                        
                        <!--button on top left-->
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> 
                        
                        <!--collapsed menu-->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                          
                    </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <!--Container of my link that are on the far right, they collapse with a small screen-->
                        <ul class="nav navbar-nav navbar-right">
                            
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
                            
                        </ul>
                        
                    </div>
                    
                </div>
            </nav>
        
        </header>