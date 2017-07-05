<?php


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
    
}
add_action('after_setup_theme', 'enqueue_custom_menus');

?>