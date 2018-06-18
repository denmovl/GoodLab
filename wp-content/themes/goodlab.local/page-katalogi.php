<?php get_header(); ?>
<main>
    <section>
        <div class="mainSectionForCategories">
            <div class="center">
                <div class="sidebar">
                    <div class="categories">
                        <p><?php the_field("title_name_for_katalogi")?></p>
                        <ul>
	                        <?php

	                        // check if the repeater field has rows of data
	                        if( have_rows('list_katalogi') ):

		                        // loop through the rows of data
		                        while ( have_rows('list_katalogi') ) : the_row();
			                        ?>
                                    <li><a href="#"> <?php the_sub_field("each_links_katalogi")?></a></li>
		                            <?php
		                        endwhile;
	                        endif;
	                        ?>
                        </ul>
                    </div>
                    <div class="buttonForSidebar" id="buttonSlide">
                    </div>
                </div>
                <div class="titleMain">
                    <p><?php the_field("main_title") ?></p>
                </div>
                <div class="directoriesWrap">
                    <?php
                        $args = array( 'cat' => 6);
                        $query = new WP_Query( $args );
                        // Цикл
                        if ( $query->have_posts() ) {
                            while ( $query->have_posts() ) { $query->the_post();
                                ?>
                                <div class="directoriesEach">
                                <a href="<?php the_permalink();?>">
                                    <img src="http://goodlab1/wp-content/uploads/2018/04/Katalogi.png" alt="directories">
                                    <p><?php the_title();?></p>
                                </a>
                                </div>
                                <?php
                            }
                        }
                         wp_reset_postdata();
	                ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>
<!--<script src="jquery-3.2.1.min.js"></script>-->
<!--<script src="underBar.js"></script>-->
