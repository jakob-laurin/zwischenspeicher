<?php


if( have_rows('baukasten') ):

  ?> <div class="inhalt" id="Inhalt"><?php

     // loop through the rows of data
    while ( have_rows('baukasten') ) : the_row();


    	// Startbild

        if( get_row_layout() == 'startbild' ):


	    	get_template_part( 'content-parts/baukasten', 'startbild' );
        

        // Textblock Ue2

        elseif( get_row_layout() == 'textblock_ue2' ):


            get_template_part( 'content-parts/baukasten', 'textblock_ue2' );


        // Textblock Ue1

        elseif( get_row_layout() == 'textblock_ue1' ):


            get_template_part( 'content-parts/baukasten', 'textblock_ue1' );


         // Zitat

        elseif( get_row_layout() == 'zitat' ):


            get_template_part( 'content-parts/baukasten', 'zitat' );


         // aktueller_artikel

        elseif( get_row_layout() == 'aktueller_artikel' ):


            get_template_part( 'content-parts/baukasten', 'aktueller_artikel' );


        // formular

        elseif( get_row_layout() == 'formular' ):


            get_template_part( 'content-parts/baukasten', 'formular' );


        // headerbild_schmal

        elseif( get_row_layout() == 'headerbild_schmal' ):


            get_template_part( 'content-parts/baukasten', 'headerbild_schmal' );



        // 2_spalten

        elseif( get_row_layout() == '2_spalten' ):


            get_template_part( 'content-parts/baukasten', '2_spalten' );



        // ue2

        elseif( get_row_layout() == 'ue2' ):


            get_template_part( 'content-parts/baukasten', 'ue2' );


        // ue1

        elseif( get_row_layout() == 'ue1' ):


            get_template_part( 'content-parts/baukasten', 'ue1' );



        // bildslider

        elseif( get_row_layout() == 'bildslider' ):


            get_template_part( 'content-parts/baukasten', 'bildslider' );


        // team

        elseif( get_row_layout() == 'team' ):


            get_template_part( 'content-parts/baukasten', 'team' );


        // kontakt

        elseif( get_row_layout() == 'kontakt' ):


            get_template_part( 'content-parts/baukasten', 'kontakt' );


        // galerie

        elseif( get_row_layout() == 'galerie' ):


            get_template_part( 'content-parts/baukasten', 'galerie' );


        // leistungen

        elseif( get_row_layout() == 'leistungen' ):


            get_template_part( 'content-parts/baukasten', 'tabs' );



        endif;

    endwhile;

    ?>
    </div><?php

else :

    // no layouts found

endif;

?>
