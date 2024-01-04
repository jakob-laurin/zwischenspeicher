
<?php 
$bilder = get_sub_field("bilder");


 ?>
<section class="bildslider" >

        <!-- Slider -->


         <?php
        // check if the repeater field has rows of data
        if( have_rows('bilder') ):

        ?>





            <div class="row justify-content-center">

                <!-- bilder -->
                <div class="col-lg-12 col-md-12 text-center ">

                    <div class="bildSlider row pt-4 mt-1" >


                    <?php

                        while ( have_rows('bilder') ) : the_row();

                            $bild = get_sub_field('bild');?>

                            <img <?php awesome_acf_responsive_image($bild,'custom_col4','650px'); ?>  class=""/>

                    <?php endwhile; ?>




                    </div>

                </div>

            </div>




        <?php endif; ?>
</section>


