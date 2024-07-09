<?php
  $rows = get_field('clients');
?>

<?php if(!empty($rows)): ?>
<div id="clients">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="clients">
                    <?php foreach($rows as $row): ?>
                    <a href="<?= $row['url'] ?>" class="client">
                        <?= wp_get_attachment_image( $row['logo']['ID'], 'full', '', array( 'class' => 'best-lawyers-p' ) ); ?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>