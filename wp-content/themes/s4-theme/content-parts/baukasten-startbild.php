
<?php 
$bild = get_sub_field("bild");
$logo_mitte = get_sub_field("logo_mitte");
$baumStartUrl = wp_get_attachment_image_src($bild, 'customcol12');
$buttons_anzeigen = get_sub_field("buttons_anzeigen");
$link = get_sub_field("link");
$linkname = get_sub_field("linkname");
$icon = get_sub_field("icon");
$link2 = get_sub_field("link2");
$linkname2 = get_sub_field("linkname2");
$icon2 = get_sub_field("icon2");


 ?>
<section class="startBild" style="background-image: url(<?php echo $baumStartUrl[0]; ?>)">
	<div class="row">
		<div class="col-lg-12 text-center">
			<img class="logoMitte"  src="<?php echo $logo_mitte; ?>"  />
		</div>
	</div>
	<?php 
	if ($buttons_anzeigen): ?>
		<div class="row justify-content-center pt-5 mt-5">
			<div class="col-lg-10 text-center">
				<a class="btn me-3" href="<?php echo $link['url']; ?>" title="<?php echo $linkname; ?>" style="background-image: url(<?php echo $icon; ?>)">
					<span class="btn-text"><?php echo $linkname; ?></span>
				</a>
				<a class="btn" href="<?php echo $link2['url']; ?>" title="<?php echo $linkname2; ?>" style="background-image: url(<?php echo $icon2; ?>)">
					<span class="btn-text"><?php echo $linkname2; ?></span>
				</a>
			</div>
		</div>
	<?php
	endif;
	?>
</section>


