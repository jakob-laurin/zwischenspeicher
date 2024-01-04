
<?php 
$button_beschriftung = get_sub_field("button_beschriftung");


		  $aktuelle_args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'posts_per_page' => 1,
		  );

		  $aktuelles_query = new WP_Query( $aktuelle_args );
  		  
  		  if($aktuelles_query->have_posts()): ?>


<section class="aktueller-post" style="background-image: url(<?php echo $hintergrundUrl[0]; ?>)">
	<div class="container">

		<?php  while ( $aktuelles_query->have_posts() ) : $aktuelles_query->the_post(); 
					$id = get_the_ID();
				?>

				<div class="row g-0">

					<div class="col-lg-6">

					<!-- post thumbnail -->
                    <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php the_post_thumbnail('latest_post'); // Fullsize image for the single post ?>
                        </a>
                    <?php endif; ?>
					</div>

					<div class="col-lg-6 txtCol text-center d-flex">
						<div class="txt align-self-center">
							<h2><?php the_title(); ?></h2>
							<p class="excerpt text-grau py-3"><?php echo get_excerpt($id); ?></p>
							<a class="btn outline" href="<?php the_permalink(); ?>"><?php echo $button_beschriftung; ?></a>
						</div>
					</div>


			  	</div>

				<?php endwhile; ?>


	</div>
</section>


  <?php endif; ?>
  <?php wp_reset_query(); ?>



