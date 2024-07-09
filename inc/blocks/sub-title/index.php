<?php
  $title = get_field('title');
?>

<?php if(!empty($title)): ?>
<h2 class="sub-title"><?= $title ?></h2>
<?php endif; ?>