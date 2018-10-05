<?php

/*
Template Name: Get A Quote
*/
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */

 get_header();

 ?>
<div class="row p-5 justify-items-center align-contents-center">
    <div class="content-block text-center">
     <?php echo do_shortcode( '[wpforms id="22" title="false" description="false"]' ); ?>
    </div>
<?php

get_footer();

?>