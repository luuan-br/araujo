<?php
    $title = get_field('title');
    $rows = get_field('cards');
?>

<div id="about-more">
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
                
                <div class="about-more">
                    <?php if( $rows && !wp_is_mobile() ): ?>
                        <?php foreach( $rows as $key => $row ): ?>
                        <a href="<?= !empty( $row['link'] ) ? $row['link'] : '#' ?>" class="card-about">
                            <?php if(!empty( $row['image'])): ?>
                                <?= wp_get_attachment_image( $row['image']['ID'], 'full', '', array( 'class' => 'card-about__image' ) ); ?>
                            <?php endif; ?>
                            
                            <?php if ( $row['title'] ): ?>
                                <h2 class="card-about__title"><?= $row['title'] ?></h2>
                            <?php endif; ?>
                        </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>