<?php get_header(); ?>
<main>
    <section>
        <div class="mainSectionForProducts">
            <div class="center">
                <div class="commonWrapForSections">
                    <div class="sidebar">
                        <div class="categories">
                            <p><?php the_field("title");?></p>
                            <ul>
	                            <?php

	                            // check if the repeater field has rows of data
	                            if( have_rows('list') ):

		                            // loop through the rows of data
		                            while ( have_rows('list') ) : the_row();
			                            ?>
                                        <li><a href="#"> <?php the_sub_field("each_list")?></a></li>
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
                        <p><?php the_field("main_title")?></p>
                    </div>
                    <div class="functionsWrap">
                    <?php
                        $args = array( 'cat' => 5);
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
        </div>
    </section>
</main>
<?php get_footer();?>

