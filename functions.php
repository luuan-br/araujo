<?php

if( !class_exists('Functions') ) :

class Functions {

    private static $instance = null;

    protected $include;

    public function __construct()
    {
        $this->include = get_template_directory() . '/' . 'inc/';
        $this->includes();
    }

    private function includes()
    {   
        // Theme Base Includes
        require_once $this->include . "theme.php";
        require_once $this->include . "enqueues.php";
        require_once $this->include . "widgets.php";

        // External Includes
        require_once $this->include . "external/bootstrap_menu.php";
    }

    public static function get_instance() {
        if (self::$instance === null) :
            self::$instance = new self();
        endif;
        return self::$instance;
    }
    
    public function excerpt_title($limit, $str) {
        $excerpt = explode(' ', $str, $limit);
        if (count($excerpt)>=$limit) {
            array_pop($excerpt);
            $excerpt = implode(" ",$excerpt).'...';
        } else {
            $excerpt = implode(" ",$excerpt);
        }
        $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
        return $excerpt;
    }
}

$Functions = new Functions();

endif;