<?php get_header();

?>

    <main role="main" id="content">

	    <div class="inhalt container" id="Inhalt">

    	<div class="row title">
    		<h1 class=" "><?php echo the_title(); ?></h1>
    	</div>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <div class="row">

                <?php the_content(); // Dynamic Content ?>

            </div>

            <div class="col-12 col-sm-4 mt-4">
                    <!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                        </a>
                    <?php endif; ?>
                    <!-- /post thumbnail -->


                </div>


        <?php endwhile; ?>

    <?php endif; ?>

	    </div>
    </main>


<?php get_footer(); ?>
