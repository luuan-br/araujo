<?php get_header();?>

<?php
    $post_type = 'event';
    $taxonomies = get_object_taxonomies($post_type);

    $taxonomy = "event-category";
    $args = array(
        'hide_empty' => true,
        'parent' => 0,
    );

    $terms = get_terms($taxonomy, $args);

    $queried_object = get_queried_object();
?>

<div class="header-equipe py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="areas">
                    <?php foreach( $terms as $term): ?>
                    <a href="<?= get_term_link($term->term_id) ?>" current-page="<?=  $queried_object->slug === $term->slug ? 'true' : 'false' ?>" class="area">
                        <img src="<?= get_template_directory_uri() . '/assets/images/Vector.png' ?>" alt="Empresarial" class="area__icon">

                        <div class="card-area__title"><?= $term->name; ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="sepator"></div>

<?php 
    $args = array(
        'post_type' => 'event',
        'post_per_page' => -1,
        'order'   => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => "event-category",
                'field' => 'slug',
                'terms' => array($queried_object->slug), 
            )
        )
    );

    $query = new WP_Query( $args );   
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
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

<?php get_footer();?>