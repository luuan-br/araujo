<?php
    $my_block_template = array();
?>

<div id="about">
    <InnerBlocks template="<?php echo esc_attr( wp_json_encode( $my_block_template ) ); ?>" />  
</div>