<?php
  $rows = get_field('actions');
?>

<?php if(!empty($rows)): ?>
<div class="header-equipe py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <div class="row">
                    <?php foreach($rows as $row): ?>
                    <div class="col">
                        <a href="<?= $row['url'] ?>" class="area d-flex mx-auto">
                            <?php if(!empty($row['icon'])): ?>
                                <?= wp_get_attachment_image( $row['icon']['ID'], 'full', '', array( 'class' => 'area__icon' ) ); ?>
                            <?php endif; ?>

                            <?php if(!empty($row['title'])): ?>
                                <div class="area__title"><?= $row['title'] ?></div>
                            <?php endif; ?>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>            
        </div>
    </div>
</div>
<?php endif; ?>