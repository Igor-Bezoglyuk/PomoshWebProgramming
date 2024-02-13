<?php 
add_action( 'wp_enqueue_scripts' , function(){;

    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com');
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');


	
	wp_deregister_script('jquery');
	wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/js/script.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'script-gallery', get_template_directory_uri() .'/assets/js/GalleryScript.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

?>

