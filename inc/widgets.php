<?php 

if( !class_exists('Widgets') ) :

class Widgets
{
  public function __construct()
  {
    $this->siderbar();
  }

  public function siderbar() {
    register_sidebar( array(
      'name'          => 'Redes sociais',
      'id'            => 'redes_sociais',
      'description'   => 'Redes sociais',
      'before_widget' => '',
      'after_widget'  => '',
    ) );

    register_sidebar( array(
      'name'          => 'Imagem footer',
      'id'            => 'image_footer',
      'description'   => 'Imagem footer',
      'before_widget' => '',
      'after_widget'  => '',
    ) );

    register_sidebar( array(
      'name'          => 'Address footer',
      'id'            => 'address_footer',
      'description'   => 'Address footer',
      'before_widget' => '',
      'after_widget'  => '',
    ) );
  }
}

$Widgets = new Widgets();

endif;

?>