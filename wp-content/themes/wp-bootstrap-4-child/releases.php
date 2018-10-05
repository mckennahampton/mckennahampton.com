<?php

/*
Template Name: Releases
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

<?php
$releases_model = mvc_model('Release');
//this loads all of them
$releases = $releases_model->find();
$releasesCount = count($releases);
$i = 1;
foreach (array_reverse($releases) as $release) { ?>

<div class="row p-5 justify-content-center">

    <div class="col-xs-12 col-sm-6 portfolio-block">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-6 portfolio-img">
                <img src="<?php echo get_stylesheet_directory_uri() . $release->cover; ?>" alt="Cover Logo"/>
                <br></br>
                <a type="button" target="_blank" href="<?php echo $release->bandcamp; ?>" class="btn my-4 py-2 btn-outline-primary">Listen in Bandcamp</a>
            </div>
            <div class="col-xs-12 col-sm-6 portfolio-text">
            <p><?php echo $release->description; ?></p>
                <div class="light-hr"></div>
                <p>
                    <strong>Published</strong> - <?php echo $release->publish_date; ?>
                    <br></br>
                    Available on Apple Music, Spotify, Amazon, and everywhere else you get music.
                </p>
            </div>
        </div>
    </div>
</div>

<?php
if ($releasesCount !== $i) {
    ?>
    <div class="light-hr"></div>
    <?php
}

$i++;
}

?>

</div>

<?php

get_footer();

?>