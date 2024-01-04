
<?php 
$adresse = get_sub_field("adresse");
$kontakt = get_sub_field("kontakt");
$social_media = get_sub_field("social_media");
$formular = get_sub_field("formular");
$google_maps = get_sub_field("google_maps");

?>


<section class="kontakt py-4">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-2 col-11">
				<h2><?php the_title(); ?></h2>
			</div>
			<div class="col-lg-8 col-11">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-6">
						<?php echo $adresse; ?>
					</div>
					<div class="col-lg-4 col-md-4 col-6">
						<?php echo $kontakt; ?>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class=" socialMedia">
                        
                        <?php if ($social_media['facebook']): ?>
                                  <a href="<?php echo $social_media['facebook']; ?>" target="_blank">
                                    <img class="smIcon"  src="<?php bloginfo('stylesheet_directory'); ?>/img/ico/ico-fb.svg"  />
                                  </a>
                        <?php endif; ?>


                        <?php if ($social_media['instagram']): ?>
                                  <a href="<?php echo $social_media['instagram']; ?>" target="_blank">
                                    <img class="smIcon"  src="<?php bloginfo('stylesheet_directory'); ?>/img/ico/ico-insta.svg"  />
                                  </a>
                        <?php endif; ?>

                       
                    </div>
					</div>
				</div>
				<div class="row formular">
					 <?php echo do_shortcode('[wpforms id="'.$formular[0].'" title="false" description="false"]'); ?>
				</div>

				<div class="row maps">
					 <?php echo $google_maps; ?>
				</div>
			</div>
			
		</div>
	</div>
</section>




