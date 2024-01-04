
<?php 
$formular = get_sub_field('formular');


 ?>
<section class="formular">
	<div class="container">
        <div class="row justify-content-center g-0 py-5 my-5">
            <div class="col-lg-8 formCol">
                <?php echo do_shortcode('[wpforms id="'.$formular[0].'" title="false" description="false"]'); ?>
            </div>
            
        </div>
    </div>
</section>

