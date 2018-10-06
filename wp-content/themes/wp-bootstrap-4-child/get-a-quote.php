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
        <p>
            Whether you need a WordPress specialist to cleanup your existing site, or a full-scale brand new project to come to life,
            let me know about it. I'll give you 100% honest feedback; if I don't think I can do it, I'll tell you. If I think it will
            take more time that you expect, and therefore cost more money, I'll be upfront about it.
            <div class="light-hr"></div>
            A basic site, such as a portfolio for your work or a website for your restaurant, is typically about $3,000.
            <br></br>
            If you need custom functionality, a robust e-commerce storefront, graphics design, etc, expect it to cost
            $6,000+. This is of course subjectual; it's hard to say without knowing the details. Becuase of this, it's
            important to know what you want, and to have examples of other work to point to.
        </p>
    </div>
</div>
<div class="row p-5 justify-items-center align-contents-center">
    <div class="content-block text-center">
     <?php echo do_shortcode( '[wpforms id="22" title="false" description="false"]' ); ?>
    </div>
<?php

get_footer();

?>