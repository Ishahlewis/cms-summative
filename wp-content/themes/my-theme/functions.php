<?php

function enqueue_function(){


    wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('purecss','https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style( 'style', get_template_directory_uri().'/css/style.css' );

    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js");
    wp_enqueue_script('myscript', get_template_directory_uri() . '/js/myscript.js', array('jquery'), '1.0.0', true);


}

add_action( 'wp_enqueue_scripts', 'enqueue_function' );

function register_resources(){

    //register main menu
    register_nav_menu('main-menu', 'Main Menu');

    //register works
	    $args = array(
        'public' => true,
        'label'  => 'Works',
        // 'show_in_rest'=>true,
        // 'supports'=>array('title','editor')
      );
      register_post_type( 'work', $args );
  

    //   register section taxonomy
      $args = array(
      'hierarchical'=> true,
		  'labels' => array(
			'name' => 'Genres',
			'singular_name' => 'Genre',
			'menu_name' => 'Genres'
      ),
      'public' => true,
      'show_in_nav_menues' => true
      );
      register_taxonomy('genre','work',$args);
        
}

add_action('init','register_resources');



?>