<?php

if (!defined('ABSPATH')) {
    exit;
}

class CPT_Links
{
    /**
     * Start up
     */
    public function __construct()
    {
        // Register post type "Links"
        add_action('init', array($this, 'register_custom_post_type_links'));
    }

    // Register post type "Links"
    public function register_custom_post_type_links()
    {
        $labels = array(
            'name'               => _x( 'Links Externos', 'post type general name', 'links' ),
            'singular_name'      => _x( 'Link Externo', 'post type singular name', 'links' ),
            'menu_name'          => _x( 'Links Externos', 'admin menu', 'links' ),
            'name_admin_bar'     => _x( 'Links Externos', 'add new on admin bar', 'links' ),
            'add_new'            => _x( 'Novo link externo', 'links', 'links' ),
            'add_new_item'       => __( 'Adicionar novo link externo', 'links' ),
            'new_item'           => __( 'Novo link externo', 'links' ),
            'edit_item'          => __( 'Editar link externo', 'links' ),
            'view_item'          => __( 'Ver link externo', 'links' ),
            'all_items'          => __( 'Todos os Links Externos', 'links' ),
            'search_items'       => __( 'Buscar links externos', 'links' ),
            'not_found'          => __( 'Não existem links externos cadastrados! ', 'links' ),
            'not_found_in_trash' => __( 'Não há links externos na lixeira!', 'links' )
        );
    
        $args = array(
            'labels'              => $labels,
            'public'              => false,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'links', 'with_front' => true, 'pages' => true, 'feeds' => true, ),
            'capability_type'     => 'post',
            'has_archive'         => false,
            'hierarchical'        => true,
            'menu_position'       => 0,
            'menu_icon'           => 'dashicons-admin-links',
            'supports'            => array('title', 'thumbnail'),
            'show_in_rest'        => true
        );
        
        register_post_type('links', $args);
        flush_rewrite_rules();
    }
}

$CPT_Links = new CPT_Links();
