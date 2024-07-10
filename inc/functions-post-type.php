<?php
if (!defined('ABSPATH')) {
    exit;
}

class RegisterCustomPostTypes
{
    /**
     * Start up
     */
    public function __construct()
    {
        // Register post type "team"
        add_action('init', array($this, 'register_custom_post_type_team'));
        add_action('init', array($this, 'register_team_taxonomy'));

        // Register post type "event"
        add_action('init', array($this, 'register_custom_post_type_events'));
        add_action('init', array($this, 'register_events_taxonomy'));
    }

    // Register post type "team"
    public function register_custom_post_type_team()
    {
        $labels = array(
            'name'               => _x( 'Equipe', 'post type general name', 'team' ),
            'singular_name'      => _x( 'Equipe', 'post type singular name', 'team' ),
            'menu_name'          => _x( 'Equipe', 'admin menu', 'team' ),
            'name_admin_bar'     => _x( 'Equipe', 'add new on admin bar', 'team' ),
            'add_new'            => _x( 'Novo membro', 'Membro', 'team' ),
            'add_new_item'       => __( 'Adicionar Novo Membro', 'team' ),
            'new_item'           => __( 'Novo Membro', 'team' ),
            'edit_item'          => __( 'Editar Membro', 'team' ),
            'view_item'          => __( 'Ver Membro', 'team' ),
            'all_items'          => __( 'Todos os Membros', 'team' ),
            'search_items'       => __( 'Buscar Membro', 'team' ),
            'not_found'          => __( 'Não existem Membros cadastrados! ', 'team' ),
            'not_found_in_trash' => __( 'Não há Membros na lixeira!', 'team' )
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
            'menu_position'       => 0,
            'menu_icon'           => 'dashicons-businessperson',
            'supports'            => array( 'title', 'revisions', 'editor', 'thumbnail', 'excerpt' ),
            'show_in_rest'      => true
        );
        
        register_post_type( 'team', $args );
        flush_rewrite_rules();
    }

    // Register custom taxonomy
    public function register_team_taxonomy()
    {
        $labels = array(
            'name'              => _x('Categorias de Equipe', 'taxonomy general name', 'team'),
            'singular_name'     => _x('Categoria de Equipe', 'taxonomy singular name', 'team'),
            'search_items'      => __('Buscar Categorias', 'team'),
            'all_items'         => __('Todas as Categorias', 'team'),
            'parent_item'       => __('Categoria Pai', 'team'),
            'parent_item_colon' => __('Categoria Pai:', 'team'),
            'edit_item'         => __('Editar Categoria', 'team'),
            'update_item'       => __('Atualizar Categoria', 'team'),
            'add_new_item'      => __('Adicionar Nova Categoria', 'team'),
            'new_item_name'     => __('Novo Nome de Categoria', 'team'),
            'menu_name'         => __('Categorias', 'team'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'categoria-equipe', 'with_front' => false, 'hierarchical' => true,),
            'show_in_rest'      => true
        );

        register_taxonomy('team-category', array('team'), $args);

        if (!term_exists('Sócios', 'team-category')) {
            wp_insert_term('Sócios', 'team-category');
        }
        if (!term_exists('Associados', 'team-category')) {
            wp_insert_term('Associados', 'team-category');
        }
        if (!term_exists('Estagiários', 'team-category')) {
            wp_insert_term('Estagiários', 'team-category');
        }
    }

    // Register post type "events"
    public function register_custom_post_type_events()
    {
        $labels = array(
            'name'               => _x( 'Eventos', 'post type general name', 'event' ),
            'singular_name'      => _x( 'Evento', 'post type singular name', 'event' ),
            'menu_name'          => _x( 'Eventos', 'admin menu', 'event' ),
            'name_admin_bar'     => _x( 'Evento', 'add new on admin bar', 'event' ),
            'add_new'            => _x( 'Novo Evento', 'Evento', 'event' ),
            'add_new_item'       => __( 'Adicionar Novo Evento', 'event' ),
            'new_item'           => __( 'Novo Evento', 'event' ),
            'edit_item'          => __( 'Editar Evento', 'event' ),
            'view_item'          => __( 'Ver Evento', 'event' ),
            'all_items'          => __( 'Todos os Eventos', 'event' ),
            'search_items'       => __( 'Buscar Evento', 'event' ),
            'not_found'          => __( 'Não existem Eventos cadastrados! ', 'event' ),
            'not_found_in_trash' => __( 'Não há Eventos na lixeira!', 'event' )
        );
    
        $args = array(
            'labels'              => $labels,
            'public'              => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'eventos' ),
            'capability_type'     => 'post',
            'has_archive'         => true,
            'hierarchical'        => true,
            'menu_position'       => 0,
            'menu_icon'           => 'dashicons-calendar-alt',
            'supports'            => array( 'title', 'revisions', 'editor', 'thumbnail', 'excerpt' ),
            'show_in_rest'      => true
        );
        
        register_post_type( 'event', $args );
        flush_rewrite_rules();
    }
    
    // Register custom taxonomy
    public function register_events_taxonomy()
    {
        $labels = array(
            'name'              => _x('Categorias de Eventos', 'taxonomy general name', 'event'),
            'singular_name'     => _x('Categoria de Eventos', 'taxonomy singular name', 'event'),
            'search_items'      => __('Buscar Categorias', 'event'),
            'all_items'         => __('Todas as Categorias', 'event'),
            'parent_item'       => __('Categoria Pai', 'event'),
            'parent_item_colon' => __('Categoria Pai:', 'event'),
            'edit_item'         => __('Editar Categoria', 'event'),
            'update_item'       => __('Atualizar Categoria', 'event'),
            'add_new_item'      => __('Adicionar Nova Categoria', 'event'),
            'new_item_name'     => __('Novo Nome de Categoria', 'event'),
            'menu_name'         => __('Categorias', 'event'),
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'categoria-evento'),
            'show_in_rest'      => true
        );

        register_taxonomy('event-category', array('event'), $args);

        if (!term_exists('Cafés da manhã', 'event-category')) {
            wp_insert_term('Cafés da manhã', 'event-category');
        }
        if (!term_exists('Congressos e Seminários', 'event-category')) {
            wp_insert_term('Congressos e Seminários', 'event-category');
        }
    }
}

$RegisterCustomPostTypes = new RegisterCustomPostTypes();
