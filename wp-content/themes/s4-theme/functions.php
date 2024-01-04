<?php


/*—————————————————————————————————————————*/
/* Nav Walker Menu
/*—————————————————————————————————————————*/

//require_once('wp_bootstrap_navwalker.php');

/*—————————————————————————————————————————*/
/* Remove the parent theme style.css
/*—————————————————————————————————————————*/


function remove_parent_styles() {

    remove_action('wp_enqueue_scripts', 'html5blank_styles');

}

add_action( 'after_setup_theme', 'remove_parent_styles' );

/*—————————————————————————————————————————*/
/* Include the parent & child theme
/*—————————————————————————————————————————*/

function childtheme_enqueue_scripts() {

    /* Parent Styles */

    wp_register_style('html5blank', get_template_directory_uri(). '/style.css');
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');

    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style('normalize');

    /* Child Style including Bootstrap */

    wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/css/app.css'  );
    wp_enqueue_style( 'childstyle' );

    /* Child Style */

    wp_register_style( 'childstyle-neu', get_stylesheet_directory_uri() . '/style.css'  );
    wp_enqueue_style( 'childstyle-neu' );

   /* slick slider */

    wp_register_style( 'slick', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick.css');
    wp_enqueue_style( 'slick' );

    wp_register_style( 'slick-theme', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick-theme.css');
    wp_enqueue_style( 'slick-theme' );

    /* Animate */

    // wp_register_style( 'animate', get_stylesheet_directory_uri() . '/node_modules/animate.css/animate.min.css');
    // wp_enqueue_style( 'animate' );

    /* aos */

    // wp_register_style( 'aos', get_stylesheet_directory_uri() . '/node_modules/aos/dist/aos.css');
    // wp_enqueue_style( 'aos' );


    /* Locomotive */

    // wp_register_style( 'loco', get_stylesheet_directory_uri() . '/node_modules/locomotive-scroll/dist/locomotive-scroll.min.css');
    // wp_enqueue_style( 'loco' );


      /* Date Picker */

    //  wp_register_style( 'theme', get_stylesheet_directory_uri() . '/node_modules/flatpickr/dist/flatpickr.min.css');
    // wp_enqueue_style( 'theme' );

       // masonry

wp_register_script('masonry_js', get_stylesheet_directory_uri() . '/node_modules/masonry-layout/dist/masonry.pkgd.min.js', '','', true);
 wp_enqueue_script('masonry_js');


}

add_action( 'wp_enqueue_scripts', 'childtheme_enqueue_scripts' );



/*—————————————————————————————————————————*/
/* Adding Javascripts
/*—————————————————————————————————————————*/

function wpb_adding_scripts() {




 wp_register_script('bootstrap_bundle', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.bundle.js','','1.1', true);
 wp_enqueue_script('bootstrap_bundle');

 wp_register_script('child-theme-js', get_stylesheet_directory_uri() . '/js/main.js','','1.0', true);
 wp_enqueue_script('child-theme-js');


 /* Slick Slider */



wp_register_script('slick_js', get_stylesheet_directory_uri() . '/node_modules/slick-carousel/slick/slick.js', array( 'jquery' ),'1.1', true);
 wp_enqueue_script('slick_js');



/* Date Picker */

 //   wp_register_script('imgLoaded', get_stylesheet_directory_uri() . '/node_modules/imagesloaded/imagesloaded.pkgd.min.js', '','', true);
 // wp_enqueue_script('imgLoaded');



 // wp_register_script('waypoints_js', get_stylesheet_directory_uri() . '/node_modules/waypoints/lib/jquery.waypoints.min.js', array( 'jquery' ),'1.1', true);
 // wp_enqueue_script('waypoints_js');
 //   wp_register_script('inview', get_stylesheet_directory_uri() . '/node_modules/waypoints/lib/shortcuts/inview.js', array( 'jquery' ),'1.1', true);
 // wp_enqueue_script('inview');




// Locomotive

// wp_register_script('loco_js', get_stylesheet_directory_uri() . '/node_modules/locomotive-scroll/dist/locomotive-scroll.min.js', '','', true);
//  wp_enqueue_script('loco_js');



}

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );



add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src)
{
    if ("my-script" === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}





/*—————————————————————————————————————————*/
/* ACF SRCset
/*—————————————————————————————————————————*/

/**
 * Responsive Image Helper Function
 *
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute
 */

function awesome_acf_responsive_image($image_id,$image_size,$max_width){

    // check the image ID is not blank
    if($image_id != '') {

        // set the default src image size
        $image_src = wp_get_attachment_image_url( $image_id, $image_size );

        // set the srcset with various image sizes
        $image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

        // generate the markup for the responsive image
        echo 'src="'.$image_src.'" srcset="'.$image_srcset.'" sizes="(max-width: '.$max_width.') 100vw, '.$max_width.'"';

    }
}


/*—————————————————————————————————————————*/
/* Post Thumbnails
/*—————————————————————————————————————————*/

add_theme_support( 'post-thumbnails' );
add_image_size( 'custom_col4', 475, 9999, false );
add_image_size( 'custom_col6', 950, 9999, false );
add_image_size( 'latest_post', 1100, 880, true );
add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'custom_col4' => __( 'customcol4' ),
        'custom_col6' => __( 'customcol6' ),
        'latest_post' => __( 'latest_post' ),

    ) );
}



/*—————————————————————————————————————————*/
/* Excerpt
/*—————————————————————————————————————————*/

function get_excerpt($id){
$content_post = get_post($id);
$excerpt = strip_shortcodes($content_post->post_content);

$excerpt = wp_trim_words($excerpt, 30);
return $excerpt;
}

/*------------------------------------*\
    SVG Support
\*------------------------------------*/

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

  global $wp_version;
  if ( $wp_version !== '4.7.1' ) {
     return $data;
  }

  $filetype = wp_check_filetype( $filename, $mimes );

  return [
      'ext'             => $filetype['ext'],
      'type'            => $filetype['type'],
      'proper_filename' => $data['proper_filename']
  ];

}, 10, 4 );

function cc_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
  echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );




?>
