<?php get_header(); ?>
<main>
    <section>
        <div class="mainSection">
            <div class="center">
                <div class="commonWrap">
                    <div class="leftWrap">
                    </div>
                    <div class="rightWrap">
                        <div class="wayWrap">
                            <ul>
                                <li><a href="#">Kategoria1</a></li>
                                <li><a href="#">Podgategoria1</a></li>
                                <li><a href="#">Podpodategoria1</a></li>
                                <li><a href="#">Chłodziarka laboratoryjna LKUv 1610</a></li>
                            </ul>
                        </div>
                        <div class="aboutWrap">
                            <h3><?php the_field("main_title") ?></h3>
                            <p><?php the_field("description_1")?></p>
                            <ul>
	                            <?php

	                            // check if the repeater field has rows of data
	                            if( have_rows('features') ):

		                            // loop through the rows of data
		                            while ( have_rows('features') ) : the_row();
	                            ?>
                                        <li><?php the_sub_field("features_each")?></li>
		                            <?php
		                            endwhile;
	                            endif;
	                            ?>
                            </ul>
                            <p><?php the_field("description_2")?></p>
                        </div>
                        <div class="tableWrap">
                            <?php
                            $table = get_field( 'table' );

                            if ( $table ) {

                                echo '<table border="0">';

                                if ( $table['header'] ) {

                                    echo '<thead>';

                                    echo '<tr>';

                                    foreach ( $table['header'] as $th ) {

                                        echo '<th>';
                                        echo $th['c'];
                                        echo '</th>';
                                    }

                                    echo '</tr>';

                                    echo '</thead>';
                                }

                                echo '<tbody>';

                                foreach ( $table['body'] as $tr ) {

                                    echo '<tr>';

                                    foreach ( $tr as $td ) {

                                        echo '<td>';
                                        echo $td['c'];
                                        echo '</td>';
                                    }

                                    echo '</tr>';
                                }

                                echo '</tbody>';

                                echo '</table>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>