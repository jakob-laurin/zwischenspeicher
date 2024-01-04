
<?php $spalte4 = get_field('spalte_4', 'option'); ?>

<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div><label class="screen-reader-text" for="s">
    	<h5>Suche</h5>
    </label>
        <input type="text" value="" placeholder="<?php echo $spalte4['suchbegriff']; ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="&nbsp;" class="button" />
    </div>
</form>