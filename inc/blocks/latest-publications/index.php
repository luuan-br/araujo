<?php
  $title = get_field('title');
?>

<?php if(!empty($title)): ?>
<div class="sub-title"><?= $title ?></div>
<?php endif; ?>

<?php 
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $args = array(
        'post_type' => 'post',
        'paged' => $paged,
        'order'   => 'ASC'
    );

    $query = new WP_Query( $args );                            
?>

<?php if ( $query->have_posts() ): ?>
<div class="posts-lines">
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <a href="<?= get_permalink(); ?>" class="post">
        <div class="post__title"><?= get_the_title(); ?></div>
        <div class="post__date"><?= get_the_date( 'd/m/Y' ); ?></div>
    </a>
    <?php endwhile; ?>
</div>
<?php else : ?>                      
    <p>Nenhum post encontrado.</p>
<?php endif;?>