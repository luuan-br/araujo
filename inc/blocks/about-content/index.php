<?php 
    $title = get_field('title');
    $content = get_field('content');
?>

<div class="container about-content">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-7">
            <?php if ( $title ): ?>
                <h2 class="sub-title"><?= $title ?></h2>
            <?php endif; ?>

            <?php if ($content): ?>
                <div class="content">
                    <?= $content; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>