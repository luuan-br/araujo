<?php
    $rows = get_field('lawyers');
?>

<?php if(!empty($rows)): ?>
<div class="lawyers">
    <?php foreach($rows as $row): ?>
        <?php if(!empty($row['url'])):?>
        <a class="lawyer" href="<?= $row['url'] ?>">
            <div class="lawyer__icon">
                <?php if(!empty($row['imagem'])):?>
                    <?= wp_get_attachment_image( $row['imagem']['ID'], 'full', '', array( 'class' => 'img-fluid' ) ); ?>
                <?php else: ?>
                    <div class="sigla"><?= $row['sigla'] ?></div>
                <?php endif; ?>
            </div>

            <div class="lawyer__content">
                <?php if(!empty($row['name'])):?>
                    <div class="name"><?= $row['name'] ?></div>
                <?php endif; ?>
            </div>
        </a>
        <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>