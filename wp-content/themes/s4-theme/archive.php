<?php

/* Template Name: Archive */

get_header();

?>

    <main role="main" id="content">

    <section class="headerbildSchmal" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/img/header-oliven.jpg)">
    <div class="row h-100">
        <div class="col-lg-12 text-center align-self-center">
            <h1 class="pt-5"><?php the_title(); ?></h1>

        </div>
    </div>
</section>


        <section class="postsMasonry">

            <div class="container">
                <div class="row justify-content-center">

                        <?php
                        $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                        $wp_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page' => 10,
        'paged' => $paged));

                        if ($wp_query->have_posts()): ?>

                            <div class="row justify-content-center">

                                <div class="card-columns grid col-lg-11">

                                    <article class="grid-sizer">
                                        
                                    </article>

                                    <?php while ($wp_query->have_posts()) : $wp_query->the_post();

                                        $excerpt = get_excerpt(get_the_ID());?>


                                        <!-- article -->
                                        <article id="post-<?php the_ID(); ?>" class="grid-item">
                                          
                                            <?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
                                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                                    <?php the_post_thumbnail('large'); // Declare pixel size you need inside the array ?>
                                                </a>
                                            <?php endif; ?>
                                            <h4 class="mt-4"><?php echo the_date(); ?></h4>
                                            <h2 class="">
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
     

                                </div>

                                

                            </div>

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                     <!-- pagination -->
                                        <div class="pagination justify-content-center">
                                            <?php html5wp_pagination(); ?>
                                        </div>
                                        <!-- /pagination -->
                                </div>
                            </div>


                            <?php endif; ?>







                </div>

            </div>




        </section>


    </main>


<?php get_footer(); ?>


