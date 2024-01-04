
var $j = jQuery.noConflict();


$j(document).ready(function() {


  $j('.bildSlider').slick({
      centerMode: true,
      variableWidth: true,
      slidesToShow: 2,
      dots: false,
      arrows: true,
      infinite: true,
      autoplay: false,
      responsive: [
      {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: false
          }
        },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
        arrows: false,
        dots: true
      }
    }
  ]
    });


    setTimeout(function() {
    $j('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
    gutter: 10
    });
    }, 600);

    setTimeout(function() {
    $j('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: '.grid-sizer',
    gutter: 10
    });
    }, 1500);


    setTimeout(function() {
    $j('.galleryThumb').masonry({
      // options
        columnWidth: '.grid-sizer',
        itemSelector: '.grid-item',
        gutter:10
    });
    }, 600);




  //  Back To Top

  // Der Button wird mit JavaScript erzeugt und vor dem Ende des body eingebunden.
	var back_to_top_button = ['<a href="#top" class="back-to-top"></a>'].join("");
	$j("body").append(back_to_top_button)

	// Der Button wird ausgeblendet
	$j(".back-to-top").hide();

	// Funktion für das Scroll-Verhalten
	$j(function () {
		$j(window).scroll(function () {
			if ($j(this).scrollTop() > 100) { // Wenn 100 Pixel gescrolled wurde
				$j('.back-to-top').fadeIn();
			} else {
				$j('.back-to-top').fadeOut();
			}
		});

		$j('.back-to-top').click(function () { // Klick auf den Button
			$j('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});


});

