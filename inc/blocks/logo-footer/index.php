<?php
    $image = get_field('image');
?>

<?php if(!empty($image)): ?>     
    <a class="d-block text-center text-lg-start" href="<?= get_option('home') ?>">
        <?= wp_get_attachment_image( $image['ID'], 'full', '', array( 'class' => 'img-fluid m-auto' ) ); ?>
    </a>
<?php endif; ?>