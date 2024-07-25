<?php

if( !class_exists('Theme') ) :

class Theme {

    protected $cpts;
    protected $blocks;

    public function __construct()
    {
        add_action('after_setup_theme', array($this, 'theme_support'));
        add_filter('body_class', array ($this, 'add_slug_body_class'));
        add_filter('query_vars', array($this, 'add_query_vars_filter'));

        // Includes
        $this->cpts = get_template_directory() . '/' . 'inc/cpts/';
        $this->blocks = get_template_directory() . '/' . 'inc/blocks/';
        $this->custom_posts();
        $this->blocks();
    }

    private function custom_posts() 
    {
        require_once $this->cpts . "banner.php";
        require_once $this->cpts . "expertise.php";
        require_once $this->cpts . "team.php";
        require_once $this->cpts . "events.php";
        require_once $this->cpts . "links.php";
    }

    private function blocks() 
    {
        require_once $this->blocks . "index.php";
    }

    public function theme_support()
    {
        add_theme_support('post-thumbnails', array('post', 'page', 'event', 'team', ));

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // logo personalizado
        add_theme_support( 'custom-logo', 
            array(
                'height'      => 30,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );

        // Menu Register
        register_nav_menus( 
            array(
                'menu-header'   => 'Main menu',
                'menu-footer-1' => 'Footer 1',
                'menu-footer-2' => 'Footer 2'
            )
        );
    }

    public function add_slug_body_class( $classes ) 
    {
        global $post;
        
        if ( isset( $post ) ) :
            $classes[] = $post->post_type . '-' . $post->post_name;
        endif;

        return $classes;
    }

    public function add_query_vars_filter($vars)
    {
        $vars[] = "paged";
        return $vars;
    }
}

$Theme = new Theme();

endif;