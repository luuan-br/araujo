<?php
    $my_block_template = array();
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-12 my-5">
            <InnerBlocks template="<?php echo esc_attr( wp_json_encode( $my_block_template ) ); ?>" />
        </div>
    </div>
</div>