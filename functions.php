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
			'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
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
			'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
			)
		);
		register_post_type( 'festival banner',
			array(
				'labels' => array(
					'name' => __( 'Festival banner' ),
					'singular_name' => __( 'Festival banner' )
				),
			'public' => true,
			'menu_position' => 20, 
			'supports' => array('title', 'editor', 'thumbnail'),
			)
		);
		flush_rewrite_rules();
	}

	// add custom post to category filter
	function namespace_add_custom_types( $query ) {
		if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

			$post_types = get_post_types();

			$query->set( 'post_type', $post_types );
			
			return $query;
		}
	}
	add_filter( 'pre_get_posts', 'namespace_add_custom_types' );

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

	// Hook for adding admin menus
	add_action('admin_menu', 'mt_add_pages');

	// action function for above hook
	function mt_add_pages() {
		// Add a new top-level menu (ill-advised):
	    add_menu_page(__('Teatro Bresci Istruzioni','menu-test'), __('Teatro Bresci Istruzioni Istruzioni','menu-test'), 'manage_options', 'mt-top-level-handle', 'mt_toplevel_page' );
	}

	// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
	function mt_toplevel_page() {
	    echo "<h1>" . __( 'Teatro Bresci - come aggiornare il sito:', 'menu-test' ) . "</h1>";
	    get_template_part( 'how', 'to' );
	}



	function the_slug() {
	    $post_data = get_post($post->ID, ARRAY_A);
	    $slug = $post_data['post_name'];
	    return $slug; 
	}

	function my_login_logo() { ?>
	<style type="text/css">
	    body.login div#login h1 a {
	        background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/img/login.jpg);
	        background-size: contain;
	    	width: 300px;
	    	margin-bottom: 0;
	    }
	</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
?>