<?php get_header(); ?>
<main>
    <section>
        <div class="mainSection">
            <div class="center">
                <div class="titleMain">
                    <p><?php the_field("title");?></p>
                </div>
                <div class="functionsWrap">
	                <?php
                    $args = array( 'cat' => 4);
                    $query = new WP_Query( $args );
                    // Цикл
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) { $query->the_post();
                            ?>
                            <div class="everFunctions">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="firstBlock">
                                    </div>
                                    <div class="secondBlock">
                                        <p><?php the_title(); ?></p>
                                    </div>
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
    <section>
        <div class="mainAboutAs">
            <div class="center">
                <div class="mainWrapForInfo">
                    <div class="headersWrap commonAboutInfo">
                        <div class="imgOur commonImgAbout">
                        </div>
                        <div class="textOur commonTextAbout">
                            <h1><?php the_field("title_for_2_block");?></h1>
                            <span><?php the_field("short_description");?></span>
                        </div>
                    </div>
                </div>
                <div class="textLeftWrap">
                    <p><?php the_field("quotation");?></p>
                </div>
                <div class="textCenterWrap">
                <?php
                   $args = array( 'cat' => 7);
                   $query = new WP_Query( $args );
                   // Цикл
                   if ( $query->have_posts() ) {
                       while ( $query->have_posts() ) { $query->the_post();
                        ?>
                        <!-- <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail() ?></a> -->
                        <?php the_content(); ?>
                        <?php   
                       }
                   }
                   wp_reset_postdata();  
                ?>

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
    </section>
</main>
<?php get_footer();?>