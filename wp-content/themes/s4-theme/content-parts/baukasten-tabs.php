
<?php
global $var;
$short = get_sub_field("shortcut");
$name = get_sub_field("name");
?>





<section class="tabs">

  <div class="container responsive-tabs">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-12 text-center">
                <h2><?php echo $name; ?></h2>
                </div>
        <div class="col-lg-4 col-md-4 col-sm-0 col-10">
        <?php

        $anzRows = count(get_sub_field('leistungen'));

        if( have_rows('leistungen') ):

            echo '<div class="nav nav-tabs text-left " role="tablist" >';

            $count = 0;

            while ( have_rows('leistungen') ) : the_row();


                $count++;

                $titel = get_sub_field('name');


                $countname = "tabnum".$short.$count;


                if($count == 1):
                    echo "<button class='nav-link active first $countname' data-bs-toggle='tab' role='tab' data-bs-target='#$countname'  aria-controls='$countname' aria-selected='true'>
                <h2 class=''>$titel</h2>
                </button>"; else:

                    echo "<button class='nav-link $countname' data-bs-toggle='tab' role='tab' data-bs-target='#$countname'  aria-controls='$countname' >
                    <h2 class=''>$titel</h2></button>";

                endif;


                if($count == $anzRows):


                    echo '</div></div>';

                endif;


            endwhile;


        endif;


        if( have_rows('leistungen') ):

            echo '<div class="tab-content col-lg-8  col-md-8 col-sm-12 col-12" id="tabContent">';
                    $counter = 0;

            while ( have_rows('leistungen') ) : the_row();
                $bildurl ="";
                $counter++;
                $countname = "tabnum".$short.$counter;
                $collapsename = "collapse-".$counter;
                $headingName = "heading-".$counter;
                $titel = get_sub_field('name');

                $text = get_sub_field('beschreibung');
                $kontaktperson = get_sub_field('kontaktperson');



                if($counter == 1):
                    echo "<div class='card tab-pane fade show active' id='$countname' role='tabpanel'>";
                        echo "<div class='card-header' role='tab' id='$headingName'> ";
                            echo "<a data-bs-toggle='collapse' href='#$collapsename' aria-expanded='true' aria-controls='$collapsename'>";
                            echo "<h2>$titel</h2>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div id='$collapsename' class='collapse show' data-bs-parent='#content' role='tabpanel' aria-labelledby='$headingName'>";
                            echo "<div class='card-body'>";
                                echo "<div class='textCol'><h3>$titel</h3>$text<h5>Kontaktperson</h5>";
                              echo "<p>";

                              foreach($kontaktperson as $kontaktID):
                                $kontaktname = get_field('text', $kontaktID);
                                $lnk = get_permalink($kontaktID);?>

                                <a href="<?php echo $lnk; ?>"><?php echo $kontaktname['name']; ?></a>
                                <?php
                                
                             endforeach;
                              echo "</p>";
                            echo "</div></div>";
                        echo " </div>";


                    else:
                    echo "<div class='card tab-pane fade' id='$countname' role='tabpanel'>";
                        echo "<div class='card-header' role='tab' id='$headingName'> ";
                            echo "<a data-bs-toggle='collapse' href='#$collapsename' aria-expanded='true' aria-controls='$collapsename'>";
                            echo "<h2>$titel</h2>";
                            echo "</a>";
                        echo "</div>";
                        echo "<div id='$collapsename' class='collapse' data-bs-parent='#content' role='tabpanel' aria-labelledby='$headingName'>";
                            echo "<div class='card-body'>";
                                echo "<div class='textCol'><h3>$titel</h3>$text<h5>Kontaktperson</h5>";
                              echo "<p>";
                              if ($kontaktperson):
                              foreach($kontaktperson as $kontaktID):
                                $kontaktname = get_field('text', $kontaktID);
                                $lnk = get_permalink($kontaktID);?>

                                <a href="<?php echo $lnk; ?>"><?php echo $kontaktname['name']; ?></a><br>
                                <?php
                                
                             endforeach;
                         endif;
                              echo "</p>";
                            echo "</div></div>";
                        echo " </div>";

                    endif;


                      echo " </div>";

            endwhile;

        endif;

        ?>


    </div>
        </div>
    </div>
    
  </div>



</section>


