<?php

if( !class_exists('Enqueue') ) :

class Enqueue {
    public $styles;
    public $scripts;
    public $images;

    public function __construct()
    {
        // Paths
        $this->styles = get_template_directory_uri() . "/assets/css/";
        $this->scripts = get_template_directory_uri() . "/assets/js/";
        $this->images = get_template_directory_uri() . "/assets/images/";

        add_action('wp_enqueue_scripts', array($this, 'styles'));
        add_action('wp_enqueue_scripts', array($this, 'scripts'));
    }

    public function styles(){
        // bootstrap css
        wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');

        // fancyapps
        wp_enqueue_style('fancybox', '//cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');

        // carousel
        wp_enqueue_style('carousel', '//cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.css');

        // Default Files
        wp_enqueue_style('style-all', $this->styles . 'style-all.min.css', '', '1.0');
    }

    public function scripts(){
        // bootstrap js
        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', false , true);

        // fancyapps
        wp_enqueue_script('fancybox', '//cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', false, '1.0' , true);
        
        // carousel
        wp_enqueue_script('carousel', '//cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/carousel/carousel.umd.js', false, '1.0' , true);

        // Default Files
        wp_enqueue_script('product', $this->scripts . 'slides.js', array( 'carousel', 'fancybox' ), false, '1.0' , true);
    }
}

$Enqueue = new Enqueue();

endif;