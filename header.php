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
        
        <!--This part is needed for the advertisement-->
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-4047734154628476",
            enable_page_level_ads: true
          });
        </script>
        
        <!--from here on is personal tweaking-->
    
        <!--viewport introduced for a better mobile experience 
            more documentation at: https://www.w3schools.com/css/css_rwd_viewport.asp-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class = "wrapper-custom" >
            
            <header>
                
                <!--nav and div tag are the container of the header menu-->
                <nav id "custom-navbar" class="navbar navbar-default custom-head-foot no-border-navbar">
                    
                    <!--conteiner of the collapsed button and the home button-->
                    <div class="container overf-custom no-border-navbar">
                        
                        <!--Contain both the button on the top left and the button when it collapse-->
                        <div class="navbar-header">
                            
                            <!--Home button on top left-->
                            <a id = "home-button" class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <!--using a glyphcon from bootstrap-->
                                <span class = "glyphicon glyphicon-home custom-home-glyphicon-bootstrap" aria-hidden="true"></span>
                            </a><!--Home button--> 
                            
                            <!--This is the button that appear when everything collapse-->
                            <button id="collapse-icon" type="button" class="navbar-toggle collapsed collapse-icon-customization" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar trio-bar-collapse-button"></span>
                                <span class="icon-bar trio-bar-collapse-button"></span>
                                <span class="icon-bar trio-bar-collapse-button"></span>
                              </button>
                              
                        </div><!--navbar-header-->
                        
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                            <!--Always remember that this 
                               *This code inject the dynamic menu inside the nav bar
        					   *The links inside the dynamic menu are managed in the admin section of wordpress
        					   *The dynamic menu is made this way: <div> <ul>  </ul> </div>
        					   *Every link adds this structure inside the previous <li> <a><a> </li>
        					   * What happen when there are 2 links <div> <ul> <li><a><a></li> <li><a><a></li> </ul> </div>-->
        					<?php 
        						wp_nav_menu( 
        							array(
        								/*must have this link to function.php
        								 *In function.php we defined this menu 'alphamenu'*/
        								'theme_location'   => 'top-right-menu',
        								/*Reoving the external div*/
        								'container'        => false,
        								/*This parameter define the class of the ul mentioned above
        								 *Never forget to check bootstrap and insert the appropriate classes
        								 *It's possible to add even more classes for more personalization*/
        								'menu_class'       => 'nav navbar-nav navbar-right custom-head-foot',
        								'menu_id'          => 'dynamic-menu-custom-ul'
        							) 
        						); 
        					?>
            					
                        </div> <!--dynamic menu div-->
                    
                    </div> <!--container-->
                </nav> <!--navigation bar-->
            
            </header>