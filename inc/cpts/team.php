<?php

if (!defined('ABSPATH')) {
    exit;
}

class CPT_Team
{
    /**
     * Start up
     */
    public function __construct()
    {
        // Register post type "Banner"
        add_action('init', array($this, 'register_custom_post_type_team'));
        add_action('init', array($this, 'register_taxonomy_team'));
    }

    // Register post type "team"
    public function register_custom_post_type_team()
    {
        $labels = array(
            'name'               => _x( 'Equipe', 'post type general name', 'team' ),
            'singular_name'      => _x( 'Equipe', 'post type singular name', 'team' ),
            'menu_name'          => _x( 'Equipe', 'admin menu', 'team' ),
            'name_admin_bar'     => _x( 'Equipe', 'add new on admin bar', 'team' ),
            'add_new'            => _x( 'Novo Membro', 'Membro', 'team' ),
            'add_new_item'       => __( 'Adicionar novo Membro', 'team' ),
            'new_item'           => __( 'Novo Membro', 'team' ),
            'edit_item'          => __( 'Editar Membro', 'team' ),
            'view_item'          => __( 'Ver Membro', 'team' ),
            'all_items'          => __( 'Todos os Membros', 'team' ),
            'search_items'       => __( 'Buscar Membro', 'team' ),
            'not_found'          => __( 'Não existem membros cadastrados! ', 'team' ),
            'not_found_in_trash' => __( 'Não há membros na lixeira!', 'team' )
        );
    
        $args = array(
            'labels'              => $labels,
            'public'              => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'equipe', 'with_front' => true, 'pages' => true, 'feeds' => true, ),
            'capability_type'     => 'post',
            'has_archive'         => true,
            'hierarchical'        => true,
            'menu_position'       => 2,
            'menu_icon'           => 'dashicons-businessperson',
            'supports'            => array( 'title', 'revisions', 'editor', 'thumbnail' ),
            'show_in_rest'        => true
        );
        
        register_post_type('equipe', $args);
        flush_rewrite_rules();
    }

    // Register custom taxonomy
    public function register_taxonomy_team()
    {
        $labels = array(
            'name'              => _x('Cargos', 'taxonomy general name', 'team'),
            'singular_name'     => _x('Cargo', 'taxonomy singular name', 'team'),
            'search_items'      => __('Buscar Cargo', 'team'),
            'all_items'         => __('Todos os Cargos', 'team'),
            'parent_item'       => __('Hierarquia', 'team'),
            'parent_item_colon' => __('Hierarquia:', 'team'),
            'edit_item'         => __('Editar Cargo', 'team'),
            'update_item'       => __('Atualizar Cargo', 'team'),
            'add_new_item'      => __('Adicionar Novo Cargo', 'team'),
            'new_item_name'     => __('Novo Cargo', 'team'),
            'menu_name'         => __('Cargos', 'team'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'cargos', 'with_front' => false, 'hierarchical' => true,),
            'show_in_rest'      => true
        );

        register_taxonomy('cargos', array('equipe'), $args);
    }
}

$CPT_Team = new CPT_Team();
