
<?php 
$layout = get_sub_field("layout");
$bild_links = get_sub_field("bild_links");
$bild_rechts = get_sub_field("bild_rechts");
$zitat_links = get_sub_field("zitat_links");
$zitat_rechts = get_sub_field("zitat_rechts");
$text = get_sub_field("text");


if ($layout == "img-left"):
?>


<section class="spalten2 img-left py-4">
	<div class="container">
		<div class="row h-100">
			<div class="col-lg-6 imgCol">
				<?php echo wp_get_attachment_image( $bild_links['bild'], 'imgLeft', '', array( "class" => "h-auto" ) ); ?>
			</div>
			<div class="col-lg-6 txtCol">
				<?php echo $bild_links['text']; ?>
			</div>
		</div>
	</div>
</section>


<?php 
elseif($layout == "img-right"):
 ?>

 <section class="spalten2 img-right py-4">
	<div class="container">
		<div class="row h-100">
			<div class="col-lg-6 txtCol">
				<?php echo $bild_rechts['text']; ?>
			</div>

			<div class="col-lg-6 bildCol">
				<?php echo wp_get_attachment_image( $bild_rechts['bild'], 'imgLeft', '', array( "class" => "h-auto" ) ); ?>
			</div>
			
		</div>
	</div>
</section>


<?php 
elseif($layout == "zitat-left"):

	$zitat_rechts_bild = $zitat_rechts['hgbild'];
	$hintergrundbildUrl = wp_get_attachment_image_src($zitat_rechts_bild, 'customcol6');
 ?>

  <section class="spalten2 py-4">
	<div class="container">
		<div class="row h-100">
			<div class="col-lg-6 txtCol">
				<?php echo $zitat_rechts['text']; ?>
			</div>
			<div class="col-lg-6 zitatCol d-flex" style="background-image: url(<?php echo $hintergrundbildUrl[0]; ?>)">
				<blockquote class="align-self-center text-center">
					<h5>
						<?php 
						$zitat = $zitat_rechts['zitat'];
						echo $zitat['zitat']; ?>
					</h5>
					<p>
						<?php echo $zitat['autor']; ?>
					</p>
				</blockquote>
				
			</div>
			
			
		</div>
	</div>
</section>

<?php 
elseif($layout == "zitat-right"):

	$zitat_links_bild = $zitat_links['hgbild'];
	$hintergrundbildUrl = wp_get_attachment_image_src($zitat_links_bild, 'customcol6');
 ?>

  <section class="spalten2 py-4">
	<div class="container">
		<div class="row h-100">
			<div class="col-lg-6 txtCol">
				<?php echo $zitat_links['text']; ?>
			</div>
			<div class="col-lg-6 zitatCol d-flex" style="background-image: url(<?php echo $hintergrundbildUrl[0]; ?>)">
				<blockquote class="align-self-center text-center">
					<h5>
						<?php 
						$zitat = $zitat_links['zitat'];
						echo $zitat['zitat']; ?>
					</h5>
					<p>
						<?php echo $zitat['autor']; ?>
					</p>
				</blockquote>
				
			</div>
			
			
		</div>
	</div>
</section>


<?php 
elseif($layout == "text"):
 ?>

 <section class="spalten2 py-4">
	<div class="container">
		<div class="row h-100">
			<div class="col-lg-6 txtCol">
				<?php echo $text['text']; ?>
			</div>
			<div class="col-lg-6 txtCol">
				<?php echo $text['text_2']; ?>
			</div>
			
		</div>
	</div>
</section>


<?php endif; ?>

