<?php 
    $content = get_field('content');
?>

<?php if(!empty($content)): ?>
<div class="addrress m-auto m-lg-none text-center text-lg-start">
    <?= $content; ?>
</div>
<?php endif; ?>