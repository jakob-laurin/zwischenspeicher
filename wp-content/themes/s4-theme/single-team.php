<?php get_header();
$bild = get_field("bild");
$text = get_field('text');
$zitat = get_field('zitat');
$link = get_field('link');

?>
    
    <main role="main" id="content">

	    <div class="singleTeam container" id="Inhalt">

            <div class="row textRow">


                <?php if (have_posts()): while (have_posts()) : the_post(); ?>


                    <div class="col-lg-5 col-md-4 bildCol">
                            <img <?php awesome_acf_responsive_image($bild,'custom_col6','950px'); ?>  class="pb-5"/>
                    </div>
                    <div class="col-lg-7 col-md-8 textCol">
                        <h1 class=" "><?php echo the_title(); ?></h1>
                        <h6><?php echo $text['funktion']; ?></h6>
                        <p><?php echo $text['kassen']; ?></p>
                        <?php echo $text['beschreibung']; ?>
                        
                    </div>


                <?php endwhile; ?>

            <?php endif; ?>

            </div>

            <?php if ($zitat): ?>

            <section class="zitat" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/hg-oliven.jpeg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <blockquote>
                            <h5>
                                <?php echo $zitat; ?>
                            </h5>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <div class="row pt-5 mt-4 pb-5">
            <div class="col-lg-12 text-center">
                <a class="btn outline" href="mailto:office@arborvitae.at">Kontakt aufnehmen</a>
            </div>
        </div>

    <?php endif; ?>

	    </div>
    </main>


<?php get_footer(); ?>
