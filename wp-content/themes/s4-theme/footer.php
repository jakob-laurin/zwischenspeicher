
        <!-- Breadcrumbs -->

        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<h2 id="breadcrumbs">','</h2>' );
        }
        ?>


		<?php wp_footer(); ?>


        <?php
        $spalte1 = get_field('spalte1', 'option');
        $spalte2 = get_field('spalte2', 'option');
        $spalte3 = get_field('spalte3', 'option');
        $spalte4 = get_field('spalte4', 'option');


         ?>

        <footer>

            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-1">
                        <h5><?php echo $spalte1['ue1']; ?></h5>
                        <?php echo $spalte1['text']; ?>
                    </div>

                    <div class="col-lg-2 col-2">
                        <h5><?php echo $spalte2['ue1']; ?></h5>
                        <?php echo $spalte2['text']; ?>
                    </div>

                    <div class="col-lg-2 logoCol">
                        <img class="arbor-vitae-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/baumlogo.svg" >
                    </div>

                    <div class="col-lg-2">
                        <h5><?php echo $spalte3['ue1']; ?></h5>
                        <?php echo $spalte3['text']; ?>
                    </div>

                    <div class="col-lg-2">
                        <h5><?php echo $spalte4['ue1']; ?></h5>
                        <?php echo $spalte4['text']; ?>
                    </div>
                </div>
            </div>



        </footer>

                    <div class="row footerBottom">
                <div class="col-lg-3 col-md-3">
                    <a href="<?php echo home_url(); ?>">
                        <img class="arbor-vitae-logo2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-footer.svg" >
                    </a>
                </div>
                <div class="col-lg-9 col-md-9">
                    <?php
                              wp_nav_menu( array(
                                'theme_location'    => 'footer-menu',
                                'depth'             => 1,
                                'container'         => 'div',
                                'container_class'   => '',
                                'container_id'      => 'navbarSupportedContent',
                                'menu_class'        => '',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ) );

                             ?>

                            </div>
                </div>
            </div>


        </div>
        <!-- /wrapper -->


	</body>
</html>
