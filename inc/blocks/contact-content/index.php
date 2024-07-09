<?php 
    $description = get_field('description');
    $shortcode = get_field('shortcode');
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10">
            <?php if(!empty($description)): ?>
            <div class="content">
                <?= $description; ?>
            </div>
            <?php endif; ?>

            <?php if(!empty($shortcode)): ?>
            <div class="container-form">
                <?= do_shortcode($shortcode); ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>