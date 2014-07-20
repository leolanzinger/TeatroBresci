<?php 
	add_theme_support( 'post-thumbnails' );

	add_action( 'init', 'create_post_type' );

	//add custom post types
	function create_post_type() {
		register_post_type( 'corsi',
			array(
				'labels' => array(
					'name' => __( 'Corsi' ),
					'singular_name' => __( 'Corso' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 20,
			'taxonomies' => array('category'), 
			'supports' => array('title', 'editor', 'thumbnail'),
			)
		);
		register_post_type( 'spettacoli',
			array(
				'labels' => array(
					'name' => __( 'Spettacoli' ),
					'singular_name' => __( 'Spettacolo' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 20,
			'taxonomies' => array('category'), 
			'supports' => array('title', 'editor', 'thumbnail'),
			)
		);
		register_post_type( 'persone',
			array(
				'labels' => array(
					'name' => __( 'Persone' ),
					'singular_name' => __( 'Persona' )
				),
			'public' => true,
			'has_archive' => true,
			'menu_position' => 20,
			'supports' => array('title', 'editor', 'thumbnail'),
			)
		);
		flush_rewrite_rules();
	}

	// add custom post to category filter
	function namespace_add_custom_types_corsi( $query ) {
		if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
			$query->set( 'post_type', array(
				'post', 'corsi'
			));
			return $query;
		}
	}
	add_filter( 'pre_get_posts', 'namespace_add_custom_types_corsi' );
	function namespace_add_custom_types_spettacoli( $query ) {
		if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
			$query->set( 'post_type', array(
				'post', 'spettacoli'
			));
			return $query;
		}
	}
	add_filter( 'pre_get_posts', 'namespace_add_custom_types_spettacoli' );

	// force children category to use parent category template
	function new_subcategory_hierarchy() {  
	    $category = get_queried_object();
	 
	    $parent_id = $category->category_parent;
	 
	    $templates = array();
	     
	    if ( $parent_id == 0 ) {
	        // Use default values from get_category_template()
	        $templates[] = "category-{$category->slug}.php";
	        $templates[] = "category-{$category->term_id}.php";
	        $templates[] = 'category.php';      
	    } else {
	        // Create replacement $templates array
	        $parent = get_category( $parent_id );
	 
	        // Current first
	        $templates[] = "category-{$category->slug}.php";
	        $templates[] = "category-{$category->term_id}.php";
	 
	        // Parent second
	        $templates[] = "category-{$parent->slug}.php";
	        $templates[] = "category-{$parent->term_id}.php";
	        $templates[] = 'category.php';  
	    }
	    return locate_template( $templates );
	}
	add_filter( 'category_template', 'new_subcategory_hierarchy' );


	// function my_login_logo() { 
	// <style type="text/css">
	//     body.login div#login h1 a {
	//         background-image: url( echo get_stylesheet_directory_uri(); /img/logo-mobile.svg);
	//     }
	// </style>
	// php }
	// add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>