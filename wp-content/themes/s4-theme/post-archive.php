<?php

get_header();

?>

    <main role="main" id="content">

    


        <section class="postsMasonry">

            <div class="container">
                <div class="row justify-content-center">

                        <?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $wp_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page' => 4,
        'paged' => $paged));

                        if ($wp_query->have_posts()): ?>

                            <div class="row justify-content-center">

                                <div class="card-columns grid col-lg-11">
                                    <div class="grid-sizer"></div>

                                    <?php while ($wp_query->have_posts()) : $wp_query->the_post();

                                        $excerpt = get_excerpt(get_the_ID());?>


                                        <!-- article -->
                                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                            <h4>Miguzin Nº <?php the_ID(); ?></h4>
                                            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
                                                </a>
                                            <?php endif; ?>

                                            <h2 class="mb-4">
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                            </h2>
                                            <p><?php echo $excerpt; ?></p>

                                            <div class="row mt-5">
                                                <div class="col-lg-5 offset-lg-7 d-flex justify-content-end">
                                                    <a class="mehrerfahren align-self-end" href="<?php the_permalink(); ?>"><?php the_field('mehr_erfahren', 'option'); ?></a>
                                                </div>
                                              </div>




                                        </article>
                                        <!-- /article -->


                                    <?php endwhile; ?>

                                    <article>
                                        <!-- pagination -->
                                        <div class="pagination justify-content-center">
                                            <?php html5wp_pagination(); ?>
                                        </div>
                                        <!-- /pagination -->
                                        
                                    </article>          

                                </div>

                                

                            </div>


                            <?php endif; ?>







                </div>

            </div>




        </section>


    </main>


<?php get_footer(); ?>


