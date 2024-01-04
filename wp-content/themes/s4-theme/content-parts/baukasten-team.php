
<?php 
$uberschrift = get_sub_field("uberschrift");
$hintergrundfarbe = get_sub_field("hintergrundfarbe");
$featured_members = get_sub_field("teammitglieder_hinzufugen");


 ?>

 <!-- Slider -->


 <?php
// check if the repeater field has rows of data
if( have_rows('teammitglieder_hinzufugen') ):

?>
<section class="team" style="background-color: <?php echo $hintergrundfarbe; ?>">

    <div class="container">

        <div class="row" >

            <!-- teammitglieder_hinzufugen -->
            <div class="col-lg-12 col-md-12 text-center ">

                <h2><?php echo $uberschrift; ?></h2>

                <div class="row py-5 justify-content-center">


                <?php foreach( $featured_members as $post ): 

                        setup_postdata($post);

                        $bild = get_field('bild');
                        $text = get_field('text');
                        $zitat = get_field('zitat');
                        $link = get_field('link');
                        ?>

                        <div class="col-lg-3 col-md-6 col-10 text-start">
                        <a href="<?php the_permalink() ?>">
                            <img <?php awesome_acf_responsive_image($bild,'custom_col4','650px'); ?>  class="pb-5"/>

                            <h3><?php the_title(); ?></h3>
                        </a>
                        <h5><?php echo $text['funktion']; ?></h5>
                        <p><?php echo $text['kassen']; ?></p>
                        <p class="italic">
                            <?php echo $zitat; ?>
                        </p>
                        <p>
                            <a href="<?php the_permalink() ?>" class="mehr">mehr erfahren</a>
                        </p>
                        <a class="btn outline" href="mailto:office@arborvitae.at">Kontakt aufnehmen</a>
                        </div>

                <?php endforeach; 

                wp_reset_postdata(); ?>


                </div>

            </div>

        </div>




       

    </div>

</section>


 <?php endif; ?>


