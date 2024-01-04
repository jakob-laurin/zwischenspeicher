

<section class="galerie">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-10">



        <?php 
        $images = get_sub_field('galerie');
        $size = 'large'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
            <ul class="galleryThumb">
            			<div class="grid-sizer"></div>
                <?php foreach( $images as $image_id ): ?>
                    <li class="grid-item">
                        <?php
                        $image_thumb = wp_get_attachment_image_src( $image_id, $size );
                        $image_large = wp_get_attachment_image_src( $image_id, 'full' );
                        $title = get_the_title($image_id);
                        if ( $image_thumb ) : ?>
                            <a class="venobox" data-gall="myGallery" title="<?php echo $title; ?>" href="<?php echo $image_large[0]; ?>" >
                            	<img src="<?php echo $image_thumb[0]; ?>"/></a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
				
			
			</div>
		</div>
	</div>
</section>




