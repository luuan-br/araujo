<?php 
    $rows = get_field('item');
?>

<?php if(!empty($rows)): ?>
    <?php foreach($rows as $row): ?>
    <li class="social-item">
        <a href="<?= $row['url'] ?>" target="_blank" rel="noopener">
            <?php if(!empty($row['image'])):?>
                <?= wp_get_attachment_image( $row['image']['ID'], 'full', '', array( 'class' => 'img-fluid' ) ); ?>
            <?php endif; ?>
        </a>
    </li>
    <?php endforeach; ?>
<?php endif; ?>