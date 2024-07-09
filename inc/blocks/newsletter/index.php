<?php
    $title = get_field('title');
    $map = get_field('map');
    $icon_form = get_field('icon_form');
    $title_form = get_field('title_form');
    $shortcode_form = get_field('shortcode_form');
    $icon_contact = get_field('icon_contact');
    $title_contact = get_field('title_contact');
    $content_contact = get_field('content_contact');
?>

<div id="find-us" class="mt-3 mt-lg-0">
    <div class="container">
        <?php if(!empty($title)): ?>
        <div class="row">
            <div class="col-12">
                <h2 class="sub-title"><?= $title ?></h2>
            </div>
        </div>
        <?php endif; ?>

        <div class="row">
            <?php if(!empty($map)): ?>
            <div class="col-12 col-lg mb-3 mb-lg-0">
                <?= $map; ?>
            </div>
            <?php endif; ?>

            <div class="col-12 col-lg mb-3 mb-lg-0">
                <div class="newsletter">
                    <?php if(!empty($icon_form) || !empty($title_form)): ?>
                    <h3 class="newsletter__title">
                        <?php if(!empty($icon_form)): ?>
                            <?= wp_get_attachment_image( $icon_form['ID'], 'full', '', array( 'class' => 'icon' ) ); ?>
                        <?php endif; ?>

                        <?php if(!empty($title_form)): ?>
                            <span class="text"><?= $title_form; ?></span>
                        <?php endif; ?>
                    </h3>
                    <?php endif; ?>
                    
                    <?php if(!empty($shortcode_form)): ?>
                    <duv class="newsletter__content">
                        <?= do_shortcode($shortcode_form); ?>
                    </duv>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-12 col-lg">
                <div class="contact-us">
                    <?php if(!empty($icon_contact) || !empty($title_contact)): ?>
                    <h3 class="contact-us__title">
                        <?php if(!empty($icon_contact)): ?>
                            <?= wp_get_attachment_image( $icon_contact['ID'], 'full', '', array( 'class' => 'icon' ) ); ?>
                        <?php endif; ?>

                        <?php if(!empty($title_contact)): ?>
                            <span class="text"><?= $title_contact; ?></span>
                        <?php endif; ?>
                    </h3>
                    <?php endif; ?>

                    <?php if(!empty($content_contact)): ?>
                    <div class="contact-us__content">
                        <?= $content_contact; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>