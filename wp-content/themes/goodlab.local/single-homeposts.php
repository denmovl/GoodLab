<?php get_header(); ?>

    <div class="mainDescription">
        <div class="center">
            <h1><?php the_title();?></h1>
            <p><?php the_field("description-1");?></p>
            <p><?php the_field("description-2");?></p>
        </div>
    </div>

<?php get_footer(); ?>