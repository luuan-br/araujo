<?php 
    $rows = get_field('lawyer');
?>

<?php if($rows): ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            <div class="page-lawyers">
                <?php foreach($rows as $row): ?>
                <div class="lawyer">
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

                        <?php if(!empty($row['content'])):?>
                            <div class="content"><?= $row['content']; ?></div>
                        <?php endif;?>
                    </div>

                    <div class="lawyer__actions">
                        <?php if(!empty($row['vcard'])):?>
                        <a href="<?= $row['vcard'] ?>">
                            <img src="<?= get_template_directory_uri() . '/assets/images/v-card.svg'; ?>" alt="Vcard" class="img-fluid">
                            <span>Vcard</span>
                        </a>
                        <?php endif;?>

                        <?php if(!empty($row['profile'])):?>
                        <a href="<?= $row['profile'] ?>">
                            <img src="<?= get_template_directory_uri() . '/assets/images/document.svg'; ?>" alt="Ver perfil" class="img-fluid">
                            <span>Ver perfil</span>
                        </a>
                        <?php endif;?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>