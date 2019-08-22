<?php

    // Register Custom Post Type
    function services_cpt() {
    
        $labels = array(
            'name'                  => 'Services',
            'singular_name'         => 'Service',
            'menu_name'             => 'Services',
            'name_admin_bar'        => 'Services',
            'archives'              => 'Service Archives',
            'attributes'            => 'Service Attributes',
            'parent_item_colon'     => 'Parent Service:',
            'all_items'             => 'All Services',
            'add_new_item'          => 'Add New Service',
            'add_new'               => 'Add New',
            'new_item'              => 'New Service',
            'edit_item'             => 'Edit Service',
            'update_item'           => 'Update Service',
            'view_item'             => 'View Service',
            'view_items'            => 'View Services',
            'search_items'          => 'Search Service',
            'not_found'             => 'Not found',
            'not_found_in_trash'    => 'Not found in Trash',
            'featured_image'        => 'Featured Image',
            'set_featured_image'    => 'Set featured image',
            'remove_featured_image' => 'Remove featured image',
            'use_featured_image'    => 'Use as featured image',
            'insert_into_item'      => 'Insert into Service',
            'uploaded_to_this_item' => 'Uploaded to this Service',
            'items_list'            => 'Services list',
            'items_list_navigation' => 'Services list navigation',
            'filter_items_list'     => 'Filter Services List',
        );
        $args = array(
            'label'                 => 'Service',
            'description'           => 'Services custom post type with a smooth ui/ux.',
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-hammer',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'services', $args );
    
    }
    add_action( 'init', 'services_cpt', 0 );