<?php get_header(); ?>
<main>
    <section>
        <div class="mainSection">
            <div class="center">
                <div class="titleMain">
                    <p><?php the_field("main_title"); ?></p>
                </div>
                <div class="contentWrap">
                    <div class="textLeftWrap">
                        <div class="quote">
                            <p><?php the_field("quotation"); ?></p>
                        </div>
                    </div>
                    <div class="infoMiddleWrap">
                        <img src="<?php the_field("image")?>" alt="">
<!--                        http://goodlab1/wp-content/uploads/2018/04/article-photo.png-->
                        <p><?php the_field("description_1")?></p>
                        <p><?php the_field("description_2")?></p>
                    </div>
                    <div class="sponsorsWrap">
	                    <?php

	                    // check if the repeater field has rows of data
	                    if( have_rows('sponsor') ):

		                    // loop through the rows of data
		                    while ( have_rows('sponsor') ) : the_row();
			                    ?>
                                <div class="sponsorsEach">
                                    <a href="#"><img src="http://goodlab1/wp-content/uploads/2018/04/R1.png" alt="sponsors"></a>
                                </div>

		                    <?php
		                    endwhile;
	                    endif;
	                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer();?>