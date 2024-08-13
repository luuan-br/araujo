<?php 
    /*
     * Template Name: Quem Somos
     */
?>

<?php get_header(); ?>

<div id="about-page">
    <div class="container" id="thumbnail">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="post-header">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php else : ?>
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/default.webp'); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
                    <?php endif; ?>
                </div>
                <?php 
                    include_once('inc/blocks/sharer/sharer.php')
                ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="post-content">
                    <h1 style="position:absolute;margin-top:-2000px"><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 

    wp_reset_postdata();

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 20,
        'order'          => 'ASC',
        'category_name'  => 'reconhecimentos'
    );

    $query = new WP_Query( $args );                            
?>

<div id="posts">
    <div class="container" style="overflow: hidden;">
        <div class="row">
            <div class="col-12">
                <h2 class="sub-title">Reconhecimentos</h2>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <?php if ( $query->have_posts() ): ?>
                    <div id="post-carousel" class="posts f-carousel">
                        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="f-carousel__slide">
                                <a href="<?= get_permalink(); ?>" class="post">
                                    <?php if( has_post_thumbnail() ): ?>
                                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="<?= get_the_title(); ?>" class="post__image">
                                    <?php else: ?>
                                        <img src="<?= get_template_directory_uri() . '/assets/images/default.webp'; ?>" alt="<?= get_the_title(); ?>" class="post__image">
                                    <?php endif; ?>

                                    <div class="post__content">
                                        <div class="execpt">
                                            <?= get_the_excerpt(); ?>
                                        </div>
                                        <div class="date"><?= get_the_date( 'd/m/Y' ); ?></div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>

                    <?php 
                        $category = get_category_by_slug('reconhecimentos');
                        $category_link = get_category_link($category->term_id); 
                    ?>

                    <a href="<?= esc_url($category_link); ?>" class="btn btn-load-more-posts">
                        <span>Carregar mais reconhecimentos</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 20 11" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.32828 10.5741C9.70942 10.9197 10.2906 10.9197 10.6717 10.5741L19.183 2.85655C19.6207 2.45966 19.6207 1.77183 19.183 1.37494L18.3384 0.609083C17.9573 0.263488 17.3761 0.263488 16.9949 0.609083L10.6717 6.34265C10.2906 6.68825 9.70942 6.68825 9.32828 6.34265L3.00506 0.609083C2.62392 0.263487 2.04275 0.263486 1.66161 0.609083L0.816989 1.37494C0.379285 1.77183 0.379285 2.45966 0.816989 2.85655L9.32828 10.5741Z" fill="#F45B06"/>
                        </svg>
                    </a>
                <?php else : ?>                      
                    <p>Nenhum post encontrado.</p>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>
