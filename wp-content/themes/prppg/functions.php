<?php
if (function_exists('register_sidebar'))
	register_sidebar(array('before_widget' => '<div class="widget">', 'after_widget' => '</div>', 'before_title' => '<h4>', 'after_title' => '</h4>'));

/*** BOOT STRAP ****/
function wpbootstrap_scripts_with_jquery()
    {

        // Register the script like this for a theme:
        wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
		wp_register_script( 'mouseover', get_template_directory_uri() . '/js/open-on-mouseover.js', array( 'jquery' ) );
        wp_enqueue_script( 'samplejs', get_template_directory_uri() . '/js/jquery.min.js', array( '' ) );
		
		
        //wp_enqueue_script( 'samplejs', get_template_directory_uri() . '/js/clean-blog.min.js', array( '' ) );
        // For either a plugin or a theme, you can then enqueue the script:
        wp_enqueue_script( 'custom-script' );
		wp_enqueue_script( 'mouseover' );
    }
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


/************** IMAGEM */
add_theme_support('post-thumbnails');
?>
