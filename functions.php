<?php

if( !class_exists('Functions') ) :

class Functions {
  public $include;
  public $blocks;
  private static $instance = null;

  public function __construct()
  {
    $this->include = get_template_directory() . '/' . 'inc/';
    $this->includes();

    add_filter( 'body_class', array ($this, 'add_slug_body_class') );
    add_filter('query_vars', array($this, 'add_query_vars_filter') );
  }

  private function includes()
  {
    require_once $this->include . "functions-post-type.php";
    require_once $this->include . "blocks/index.php";
    require_once $this->include . "theme.php";
    require_once $this->include . "enqueues.php";
    require_once $this->include . "bootstrap_menu.php";
    require_once $this->include . "widgets.php";
  }

  public static function get_instance() {
    if (self::$instance === null) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  public function add_slug_body_class( $classes ) {
    global $post;
    
    if ( isset( $post ) ) {
      $classes[] = $post->post_type . '-' . $post->post_name;
    }

    return $classes;
  }

  public function add_query_vars_filter($vars){
    $vars[] = "paged";
    return $vars;
  }
  
}

$Functions = new Functions();

endif;