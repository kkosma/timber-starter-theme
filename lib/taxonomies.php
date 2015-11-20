<?php 

/* 
 * 
 * Taxonomies
 *
 */

// Same as with Custom Types, you only need the arguments and register_taxonomy function here. They are hooked into WordPress in functions.php.

$labels = array(
	'name'                       => _x( 'Cocktail Types', 'Taxonomy General Name', 'cocktails' ),
	'singular_name'              => _x( 'Cocktail Type', 'Taxonomy Singular Name', 'cocktails' ),
	'menu_name'                  => __( 'Cocktail Types', 'cocktails' ),
	'all_items'                  => __( 'All Items', 'cocktails' ),
	'parent_item'                => __( 'Parent Item', 'cocktails' ),
	'parent_item_colon'          => __( 'Parent Item:', 'cocktails' ),
	'new_item_name'              => __( 'New Item Name', 'cocktails' ),
	'add_new_item'               => __( 'Add New Item', 'cocktails' ),
	'edit_item'                  => __( 'Edit Item', 'cocktails' ),
	'update_item'                => __( 'Update Item', 'cocktails' ),
	'view_item'                  => __( 'View Item', 'cocktails' ),
	'separate_items_with_commas' => __( 'Separate items with commas', 'cocktails' ),
	'add_or_remove_items'        => __( 'Add or remove items', 'cocktails' ),
	'choose_from_most_used'      => __( 'Choose from the most used', 'cocktails' ),
	'popular_items'              => __( 'Popular Items', 'cocktails' ),
	'search_items'               => __( 'Search Items', 'cocktails' ),
	'not_found'                  => __( 'Not Found', 'cocktails' ),
);
$rewrite = array(
	'slug'                       => 'events',
	'with_front'                 => true,
	'hierarchical'               => true,
);
$args = array(
	'labels'                     => $labels,
	'hierarchical'               => true,
	'public'                     => true,
	'show_ui'                    => true,
	'show_admin_column'          => true,
	'show_in_nav_menus'          => true,
	'show_tagcloud'              => true,
	'rewrite'                    => $rewrite,
);
register_taxonomy( 'event_type', array( 'cocktail' ), $args );
