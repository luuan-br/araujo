<?php
    $title = get_field('title');
    $rows = get_field('services');
?>

<div id="areas-of-expertise" class="mt-3 mt-lg-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ( $title ): ?>
                    <h2 class="sub-title"><?= $title ?></h2>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php if( $rows && !wp_is_mobile() ): ?>
                <div class="areas">
                    <?php foreach( $rows as $key => $row ): ?>
                    <a href="<?= !empty( $row['url'] ) ? $row['url'] : '#' ?>" class="area">
                        <?php if(!empty( $row['icon'])): ?>
                            <?= wp_get_attachment_image( $row['icon']['ID'], 'full', '', array( 'class' => 'area__icon' ) ); ?>
                        <?php endif; ?>

                        <?php if ( $row['title'] ): ?>
                            <div class="card-area__title"><?= $row['title'] ?></div>
                        <?php endif; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>