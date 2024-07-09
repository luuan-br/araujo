<?php
  $rows = get_field('carousel');
?>

<div id="carousel-hero" class="carousel slide">
  <div class="carousel-indicators">
    <?php foreach($rows as $key => $row): ?>
      <button type="button" data-bs-target="#carousel-hero" data-bs-slide-to="<?= $key ?>" class="<?= $key === 0 ? 'active' : '' ?>" aria-current="<?= $key === 0 ? 'true' : 'false' ?>" aria-label="Slide <?= $key ?>"></button>
    <?php endforeach; ?>
  </div>

  <div class="carousel-inner">
    <?php foreach($rows as $key => $row): ?>
    <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
      <?php if(!empty( $row['banner_desktop'])): ?>
        <?= wp_get_attachment_image( $row['banner_desktop']['ID'], 'full', '', array( 'class' => 'd-none d-lg-block w-100' ) ); ?>
      <?php endif; ?>

      <?php if(!empty( $row['banner_mobile'])): ?>
        <?= wp_get_attachment_image( $row['banner_mobile']['ID'], 'full', '', array( 'class' => 'd-lg-none w-100' ) ); ?>
      <?php endif; ?>
      
      <?php if(!empty( $row['content'])): ?>
        <div class="carousel-caption">
          <?= $row['content']; ?>
        </div>
      <?php endif; ?>
    </div>
    <?php endforeach; ?>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-hero" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carousel-hero" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>