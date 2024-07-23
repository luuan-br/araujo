<?php get_header();?>

<main class="main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post();?>

            <?php the_content();?>

	    <?php endwhile;?>
    <?php endif;?>

    <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type' => 'post',
            'paged' => $paged,
            'order'   => 'ASC'
        );

        $query = new WP_Query( $args );                            
    ?>

    <div class="container" style="margin-top: 65px;">
        <div class="row">
            <div class="col-12">
                <?php if(!empty($title)): ?>
                    <h1 class="sub-title mt-5"><?= $title ?></h1>
                <?php endif; ?>

                <?php if ( $query->have_posts() ): ?>
                <div class="posts">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <a class="post" href="<?= get_permalink(); ?>">
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
                    <?php endwhile; ?>
                </div>
                <?php else : ?>                      
                    <p>Nenhum post encontrado.</p>
                <?php endif;?>

                <div class="btn btn-load-more-posts">
                    <span>Carregar mais notícias</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="11" viewBox="0 0 20 11" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.32828 10.5741C9.70942 10.9197 10.2906 10.9197 10.6717 10.5741L19.183 2.85655C19.6207 2.45966 19.6207 1.77183 19.183 1.37494L18.3384 0.609083C17.9573 0.263488 17.3761 0.263488 16.9949 0.609083L10.6717 6.34265C10.2906 6.68825 9.70942 6.68825 9.32828 6.34265L3.00506 0.609083C2.62392 0.263487 2.04275 0.263486 1.66161 0.609083L0.816989 1.37494C0.379285 1.77183 0.379285 2.45966 0.816989 2.85655L9.32828 10.5741Z" fill="#F45B06"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer();?>