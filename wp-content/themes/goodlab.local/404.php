<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package goodlab.local
 */

get_header();
?>

<div class="wrap404">
    <div class="center">
        <p>404</p>
        <span>Page not found</span>
        <a href="<?php echo home_url()?>" class="btn">Home</a>
    </div>
</div>


<?php
get_footer(); ?>
