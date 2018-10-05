<?php

/*
Template Name: Thank you
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

<div class="row py-5"></div>

<div class="row p-5 justify-content-center">
    <div class="content-block text-center">
        <h1>Thanks for contacting me!</h1>
        <br></br>
        <p>I will be in touch with you shortly.</p>
</div>
</div>
<div class="row py-5 justify-content-center">
    <a type="button" href="<?php echo site_url(); ?>" class="btn btn-outline-primary">Back to Home</a>
</div>
<div class="row py-5"></div>

<?php

get_footer();

?>