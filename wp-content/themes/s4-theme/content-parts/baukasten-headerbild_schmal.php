
<?php 
$uberschrift = get_sub_field("uberschrift");
$hintergrundbild = get_sub_field("hintergrundbild");
$hintergrundbildUrl = wp_get_attachment_image_src($hintergrundbild, 'customcol12');


 ?>


<section class="headerbildSchmal" style="background-image: url(<?php echo $hintergrundbildUrl[0]; ?>)">
	<div class="row h-100">
		<div class="col-lg-12 text-center align-self-center">
			<h1 class="pt-5"><?php echo $uberschrift; ?></h1>
			<div class="baum"></div>
		</div>
	</div>
</section>


