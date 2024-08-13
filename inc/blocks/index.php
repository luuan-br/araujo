<?php

if( !class_exists('ACFBlocks') ) :

class ACFBlocks {
    public $blocks;


    public function __construct()
    {
        $this->blocks = get_template_directory() . '/' . 'inc/blocks';

        // Here we call our register_acf_blocks() function on init.
        add_action('init', array($this, 'register_acf_blocks'));
    }

    /**
     * We use WordPress's init hook to make sure
     * our blocks are registered early in the loading
     * process.
     *
     * @link https://developer.wordpress.org/reference/hooks/init/
     */
    public function register_acf_blocks() {
        /**
         * We register our block's with WordPress's handy
         * register_block_type();
         *
         * @link https://developer.wordpress.org/reference/functions/register_block_type/
         */
        register_block_type( $this->blocks . '/about' );
        register_block_type( $this->blocks . '/about-content' );
        register_block_type( $this->blocks . '/about-more' );
        register_block_type( $this->blocks . '/areas-of-expertise' );
        register_block_type( $this->blocks . '/areas-of-expertise-content' );
        register_block_type( $this->blocks . '/carousel-hero' );
        register_block_type( $this->blocks . '/clients' );
        register_block_type( $this->blocks . '/contact-content' );
        register_block_type( $this->blocks . '/contatc' );
        register_block_type( $this->blocks . '/content-lawyer-profile' );
        register_block_type( $this->blocks . '/divider' );
        register_block_type( $this->blocks . '/event' );
        register_block_type( $this->blocks . '/event-content' );
        register_block_type( $this->blocks . '/header-equipe' );
        register_block_type( $this->blocks . '/image-share' );
        register_block_type( $this->blocks . '/latest-publications' );
        register_block_type( $this->blocks . '/lawyers' );
        register_block_type( $this->blocks . '/list-lawyer-practice-area' );
        register_block_type( $this->blocks . '/map' );
        register_block_type( $this->blocks . '/newsletter' );
        register_block_type( $this->blocks . '/page-lawyers' );
        register_block_type( $this->blocks . '/posts' );
        register_block_type( $this->blocks . '/publications' );
        register_block_type( $this->blocks . '/sepator' );
        register_block_type( $this->blocks . '/sub-title' );
        register_block_type( $this->blocks . '/addrress' );
        register_block_type( $this->blocks . '/logo-footer' );
        register_block_type( $this->blocks . '/social-midias' );
    }
}

$ACFBlocks = new ACFBlocks();

endif;
?>
