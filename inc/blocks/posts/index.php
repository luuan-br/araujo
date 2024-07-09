<?php
  $title = get_field('title');
?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'order'   => 'ASC'
    );

    $query = new WP_Query( $args );                            
?>

<div id="posts">
    <div class="container" style="overflow: hidden;">
        <div class="row">
            <div class="col-12">
                <?php if(!empty($title)): ?>
                <h2 class="sub-title"><?= $title ?></h2>
                <?php endif; ?>
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
                <?php else : ?>                      
                    <p>Nenhum post encontrado.</p>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>