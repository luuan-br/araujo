<?php

if (!defined('ABSPATH')) {
    exit;
}

class CPT_Expertise
{
    /**
     * Start up
     */
    public function __construct()
    {
        // Register post type "Expertise"
        add_action('init', array($this, 'register_custom_post_type_expertise'));
    }

    // Register post type "Expertise"
    public function register_custom_post_type_expertise()
    {
        $labels = array(
            'name'               => _x( 'Áreas de Atuação', 'post type general name', 'expertise' ),
            'singular_name'      => _x( 'Área de Atuação', 'post type singular name', 'expertise' ),
            'menu_name'          => _x( 'Área de Atuação', 'admin menu', 'expertise' ),
            'name_admin_bar'     => _x( 'Área de Atuação', 'add new on admin bar', 'expertise' ),
            'add_new'            => _x( 'Nova área de atuação', 'expertise', 'expertise' ),
            'add_new_item'       => __( 'Adicionar nova área de atuação', 'expertise' ),
            'new_item'           => __( 'Nova área de atuação', 'expertise' ),
            'edit_item'          => __( 'Editar área de atuação', 'expertise' ),
            'view_item'          => __( 'Ver área de atuação', 'expertise' ),
            'all_items'          => __( 'Todas as áreas de atuação', 'expertise' ),
            'search_items'       => __( 'Buscar área de atuação', 'expertise' ),
            'not_found'          => __( 'Não existem áreas de atuação cadastrados! ', 'expertise' ),
            'not_found_in_trash' => __( 'Não há áreas de atuação na lixeira!', 'expertise' )
        );
    
        $args = array(
            'labels'              => $labels,
            'public'              => false,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'area-de-atuacao', 'with_front' => true, 'pages' => true, 'feeds' => true, ),
            'capability_type'     => 'post',
            'has_archive'         => false,
            'hierarchical'        => true,
            'menu_position'       => 2,
            'menu_icon'           => 'dashicons-welcome-learn-more',
            'supports'            => array('title', 'thumbnail', 'editor'),
            'show_in_rest'        => true
        );
        
        register_post_type('area-de-atuacao', $args);
        flush_rewrite_rules();
    }
}

$CPT_Expertise = new CPT_Expertise();
