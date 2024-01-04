<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
  //  $current_template = get_page_template_slug( get_queried_object_id() );
 //   $templates = wp_get_theme()->get_page_templates();
//     $template_name = $templates[$current_template];
?>
<html <?php language_attributes(); ?> class="no-js <?php //echo $template_name; ?>">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <!-- <link href="//www.google-analytics.com" rel="dns-prefetch"> -->
<!--    <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed"> -->


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="<?php bloginfo('description'); ?>"/>

        <?php wp_head(); ?>

    </head>

<!--     <div class="preloader" id="preloader">
      <div class="loader d-flex">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/preloader-s.gif" width="57px" class="preGif">
        <p class=" loader_text" id="loader_text"><span class="loader_text_unit" data-count="100">0</span></p>
        <div class="loader_bar" id="loader_bar"></div>
      </div>

    </div> -->
    <body id="bodyID" <?php body_class(); ?> >



        <header class="header clear" role="banner" >

       <!-- Toggler -->


       <nav id="main-nav-container" class="navbar-expand-lg navbar navbar-light row <?php echo $inv; ?>" role="navigation" data-scroll data-scroll-sticky data-scroll-target="#bodyID">




                <!-- Logo  -->


                <a class="navbar-andand" href="<?php echo home_url(); ?>">
                    <div id="DesktopLogo" class="logo " alt="Arbor Vitae - Gesundheitszentrum Eggersdorf">
                    </div>
                </a>




               <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>



                <!-- Menü -->

                 <div class="collapse navbar-collapse " id="navbarSupportedContent" >


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 menu">

                            <?php
                              wp_nav_menu( array(
                                'theme_location'    => 'header-menu',
                                'depth'             => 3,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbarSupportedContent',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ) );

                             ?>

                            </div>

                        </div>
                </div>
            


            </nav>










        </header>
        <!-- /header -->




        <div class="content-wrapper" data-scroll-container>
