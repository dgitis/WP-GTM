<?php
//Create Data Layer
function my_dataLayer(){

	?>
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({
			});
		</script>
	<?php
}

add_action( 'wp_head', 'my_dataLayer', '1000');

//Add Author Data to Data Layer
function my_dataLayer(){
	global $post;

	?>
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({'author': '<?php echo (get_the_author_meta( 'display_name', $post->post_author )); ?>',
			});
		</script>
	<?php
}

add_action( 'wp_head', 'my_dataLayer', '1000');

//Create Experiment Taxonomy and Add to Data Layer
function experiments_init() {
	// create a new taxonomy
	$labels = array(
		'name'                       => _x( 'Experiments', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Experiement', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Experiments', 'textdomain' ),
		'popular_items'              => __( 'Popular Experiments', 'textdomain' ),
		'all_items'                  => __( 'All Experiments', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Experiment', 'textdomain' ),
		'update_item'                => __( 'Update Experiment', 'textdomain' ),
		'add_new_item'               => __( 'Add New Experiment', 'textdomain' ),
		'new_item_name'              => __( 'New Experiment Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate experiments with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove experiments', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used experiments', 'textdomain' ),
		'not_found'                  => __( 'No experiments found.', 'textdomain' ),
		'menu_name'                  => __( 'Experiments', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'experiment' ),
		'publicly_queryable'	=> false,
		'show_in_nav_menu'		=> false,		
	);

	register_taxonomy( 'experiments','post' , $args );
}
add_action( 'init', 'experiments_init' );


function my_dataLayer(){
	global $post;
	$experiment = get_the_terms($post->ID, 'experiments');

	?>
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({'experiment': '<?php echo( $experiment[0]->name); ?>',
			});


		</script>
	<?php
}

add_action( 'wp_head', 'my_dataLayer', '1000');

//Amalgamated Code
function my_dataLayer(){
	global $post;
	$experiment = get_the_terms($post->ID, 'experiments');

	?>
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({'author': '<?php echo (get_the_author_meta( 'display_name', $post->post_author )); ?>',
							'experiment': '<?php echo( $experiment[0]->name); ?>',
			});


		</script>
	<?php
}

add_action( 'wp_head', 'my_dataLayer', '1000');



function experiments_init() {
	// create a new taxonomy
	$labels = array(
		'name'                       => _x( 'Experiments', 'taxonomy general name', 'textdomain' ),
		'singular_name'              => _x( 'Experiement', 'taxonomy singular name', 'textdomain' ),
		'search_items'               => __( 'Search Experiments', 'textdomain' ),
		'popular_items'              => __( 'Popular Experiments', 'textdomain' ),
		'all_items'                  => __( 'All Experiments', 'textdomain' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit Experiment', 'textdomain' ),
		'update_item'                => __( 'Update Experiment', 'textdomain' ),
		'add_new_item'               => __( 'Add New Experiment', 'textdomain' ),
		'new_item_name'              => __( 'New Experiment Name', 'textdomain' ),
		'separate_items_with_commas' => __( 'Separate experiments with commas', 'textdomain' ),
		'add_or_remove_items'        => __( 'Add or remove experiments', 'textdomain' ),
		'choose_from_most_used'      => __( 'Choose from the most used experiments', 'textdomain' ),
		'not_found'                  => __( 'No experiments found.', 'textdomain' ),
		'menu_name'                  => __( 'Experiments', 'textdomain' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'experiment' ),
		'publicly_queryable'	=> false,
		'show_in_nav_menu'		=> false,		
	);

	register_taxonomy( 'experiments','post' , $args );
}
add_action( 'init', 'experiments_init' );
?>