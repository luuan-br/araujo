<?php

if (!defined('ABSPATH')) {
    exit;
}

class CPT_Banner
{
    /**
     * Start up
     */
    public function __construct()
    {
        // Register post type "Banner"
        add_action('init', array($this, 'register_custom_post_type_banner'));
    }

    // Register post type "Banner"
    public function register_custom_post_type_banner()
    {
        $labels = array(
            'name'               => _x( 'Banner Principal', 'post type general name', 'banner' ),
            'singular_name'      => _x( 'Banner', 'post type singular name', 'banner' ),
            'menu_name'          => _x( 'Banner', 'admin menu', 'banner' ),
            'name_admin_bar'     => _x( 'Banner', 'add new on admin bar', 'banner' ),
            'add_new'            => _x( 'Novo banner', 'Banner', 'banner' ),
            'add_new_item'       => __( 'Adicionar Novo Banner', 'banner' ),
            'new_item'           => __( 'Novo Banner', 'banner' ),
            'edit_item'          => __( 'Editar Banner', 'banner' ),
            'view_item'          => __( 'Ver Banner', 'banner' ),
            'all_items'          => __( 'Todos os Banners', 'banner' ),
            'search_items'       => __( 'Buscar Banner', 'banner' ),
            'not_found'          => __( 'Não existem banners cadastrados! ', 'banner' ),
            'not_found_in_trash' => __( 'Não há banners na lixeira!', 'banner' )
        );
    
        $args = array(
            'labels'              => $labels,
            'public'              => false,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'banners', 'with_front' => true, 'pages' => true, 'feeds' => true, ),
            'capability_type'     => 'post',
            'has_archive'         => false,
            'hierarchical'        => true,
            'menu_position'       => 0,
            'menu_icon'           => 'dashicons-slides',
            'supports'            => array('title'),
            'show_in_rest'        => true
        );
        
        register_post_type('banners', $args);
        flush_rewrite_rules();
    }
}

$CPT_Banner = new CPT_Banner();
