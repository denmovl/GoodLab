<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package goodlab.local
 */

get_header();
?>

<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main">-->

		<?php
		while ( have_posts() ) : the_post();

//    		get_template_part( 'template-parts/content', get_post_type() );

    		if (in_category(4)):
			    include(get_template_directory().'/single-homeposts.php');
            endif;

			if (in_category(5)):
				include(get_template_directory().'/single-kategorieposts.php');
			endif;

			if (in_category(6)):
				include(get_template_directory().'/single-katalogiposts.php');
			endif;

			if(in_category(7)):
				include(get_template_directory().'/single-infopost.php');
			endif;	
//			the_post_navigation();
//
//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

		endwhile; // End of the loop.
		?>

<!--		</main><!-- #main -->
<!--	</div><!-- #primary -->

<?php
get_footer();
