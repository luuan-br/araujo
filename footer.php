<?php $language = apply_filters( 'wpml_current_language', NULL ); ?>
  <div id="footer">
    <div class="container">
      <div class="row py-4">
        <div class="col-12 col-lg">
          <?php if ( is_active_sidebar( 'image_footer' ) ) : ?>                            
            <?php dynamic_sidebar( 'image_footer' ); ?>
          <?php endif; ?>
        </div>

        <div class="col-12 col-lg">
          <?php if ( is_active_sidebar( 'address_footer' ) ) : ?>                            
            <?php dynamic_sidebar( 'address_footer' ); ?>
          <?php endif; ?>
        </div>

        <div class="col-12 col-lg mt-4 mt-lg-0">
          <div class="menu">
            <ul class="text-center text-lg-start">
              <?php 
                $locations = get_nav_menu_locations();
                $header = wp_get_nav_menu_items($locations['menu-footer-1']);
                $outhtml = "";

                if(!empty($header)) {
                  foreach ( $header as $item ) {
                    $title = !empty($item->post_title) ? $item->post_title : $item->title;
                    $outhtml = $outhtml . "<li><a href='{$item->url}'>{$title}</a></li>";
                  }     
                }

                echo $outhtml;
              ?>
            </ul>
          </div>
        </div>

        <div class="col-12 col-lg">
          <div class="menu">
            <ul class="text-center text-lg-start">
              <?php 
                $locations = get_nav_menu_locations();
                $header = wp_get_nav_menu_items($locations['menu-footer-2']);
                $outhtml = "";

                if(!empty($header)) {
                  foreach ( $header as $item ) {
                    $title = !empty($item->post_title) ? $item->post_title : $item->title;
                    $outhtml = $outhtml . "<li><a href='{$item->url}'>{$title}</a></li>";
                  }     
                }

                echo $outhtml;
              ?>
            </ul>
          </div>
        </div>

        <div class="col-12 col-lg mt-4 mt-lg-0">
          <div class="h3 text-center text-lg-start"><?php if($language == 'en'): ?>Social Networks<?php else: ?>Redes Sociais<?php endif; ?></div>
          
          <?php if ( is_active_sidebar( 'redes_sociais' ) ) : ?>                            
            <ul class="social justify-content-center justify-content-lg-start mt-3 mt-lg-0">
              <?php dynamic_sidebar( 'redes_sociais' ); ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>

  <div id="copy">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <p class="copy-text text-center m-0 py-2">©<strong>2020-2024 | ARAUJO E POLICASTRO</strong> <span class="d-none d-lg-inline-block">-</span><br class="d-lg-none" /> <?php if($language == 'en'): ?>All rights reserved.<?php else: ?>Todos os direitos reservados.<?php endif; ?></p>
        </div>
      </div>
    </div>
  </div>
  
  <?php wp_footer(); ?>

  <!-- TODO  levar para um arquivo externo -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>
</html>