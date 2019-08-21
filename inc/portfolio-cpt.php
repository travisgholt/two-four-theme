<?php
// Post Type: Portfolio
// Author: Travis Holt
// Package: @two-four

function portfolio_post_type() {

	$labels = array(
		'name'                  => 'Works',
		'singular_name'         => 'Work',
		'menu_name'             => 'Portfolio',
		'name_admin_bar'        => 'Portfolio',
		'archives'              => 'Portfolio Archives',
		'attributes'            => 'Work Attributes',
		'parent_item_colon'     => 'Parent Work:',
		'all_items'             => 'All Works',
		'add_new_item'          => 'Add New Work',
		'add_new'               => 'Add New Work',
		'new_item'              => 'New Work',
		'edit_item'             => 'Edit Work',
		'update_item'           => 'Update Work',
		'view_item'             => 'View Work',
		'view_items'            => 'View Works',
		'search_items'          => 'Search Portfolio',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into work',
		'uploaded_to_this_item' => 'Uploaded to this work.',
		'items_list'            => 'Portfolio List',
		'items_list_navigation' => 'Portfolio List Navigation',
		'filter_items_list'     => 'Filter Portfolio List',
	);
	$args = array(
		'label'                 => 'Work',
		'description'           => 'A collection of works to display as a portfolio.',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'categories' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-art',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );