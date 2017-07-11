<?php 

/**
 * Mattia-Rubini-com function and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package MattiaRubini-com-wordpress-theme
 * @since ???
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since ???
 */


/*IMPORTANT REMINDER
 *https://developer.wordpress.org/reference/functions/__/
 */

/*Function dedicated to integrate style.css and the bootstrap library to the project*/
function enqueue_customtheme_styles(){
    /*Linking javascript bootstrap (and jquery that is already in wordpress)*/
    wp_enqueue_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'));
    /*Linking boostrap css, remember to not add the "http:" part*/
    wp_enqueue_style('bootstrap-css', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    /*Order matter
     *Placing my style after the bootstrap one help me personalize my project
     *First I set up the boostrap rules and then I override it with mine*/
    wp_enqueue_style('mattiarubiniCom-style', get_stylesheet_uri());
}
/*The first parameter is called a hook
 *You hook a precise point in a chain of event
 *Then you inject your code in that point of the sequence
 *The second parameter of "add_action" must be the name of the function above*/
add_action('wp_enqueue_scripts','enqueue_customtheme_styles');



function enqueue_custom_menus(){
    
    register_nav_menu(
        'top-right-menu',__( 'Header Menu' )
    );
    
    /*Add theme support for title tag 
     *Makes your website title appear on the tab*/
    add_theme_support( 'title-tag' );
    
}
add_action('after_setup_theme', 'enqueue_custom_menus');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Blog single page right sidebar',
		'id'            => 'blog_single_sidebar',
		'description'   => 'Widget sidebar used as an ads container',
		'class'         => '',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

?>