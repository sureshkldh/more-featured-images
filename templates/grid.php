<?php namespace mfi; ?> 

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

<?php $mfi_image = get_post_meta( get_the_ID(), 'mfi_image', true ); ?>

<?php if ( is_array( $mfi_image ) ) {?>

    <div>

        <?php foreach ( $mfi_image as $single_mfi_image ){ ?>

            <?php echo '<a data-fancybox="gallery" href="' . $single_mfi_image . '"><div class="mfi_image_item grid" style="background-image:url(' . $single_mfi_image . ')" ></div></a>'; ?>
                        
        <?php } ?>

    </div>
    
    <div class="clear clearfix"></div>

<?php }
