
<?php 
$zitat = get_sub_field("zitat");
$hintergrundbild = get_sub_field("hintergrundbild");
$bild = get_sub_field("bild");

if ($hintergrundbild){
	$hintergrundUrl = wp_get_attachment_image_src($bild, 'customcol12');
}


 ?>
<section class="zitat" style="background-image: url(<?php echo $hintergrundUrl[0]; ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<blockquote>
					
						<?php echo $zitat; ?>
					
				</blockquote>
			</div>
		</div>
	</div>
</section>


