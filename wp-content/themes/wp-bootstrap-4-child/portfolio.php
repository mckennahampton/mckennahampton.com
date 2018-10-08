<?php

/*
Template Name: Portfolio
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
            <p class="lead text-left">
                I work with the Adobe Creative Cloud, first making mockups of the UI in XD. I then work on the graphics
                and logos in Illustrator & Photoshop (I'm not expert-level in graphic design, but I know my way around).
                I've also worked with Premiere for years for personal projects.
            </p>
            <div class="hr-light"></div>
            <p class="lead text-left">
                It's important to not just write clean code. Modern websites are essentially public, cloud-based software,
                and it should behave as such. Whether it's a one-page landing site, or an enterprise-level e-commerce site,
                the UI needs to be as polished and easy to use as possible. That's why I use Bootstrap for the layout, and I
                use SASS to speed styling up (it also really helps to keep your styles organized).
                <br></br>
                In addition, the backend is the core of any software, and it's critial to have a sustainable, scalable,
                consistent scructure. This is where frameworks are extrememly useful. For open-source projects, I
                use WordPress. I start with a clean install of a basic theme skeleton, and I use the WP-MVC plugin. I'm usually against
                plugins, as they're almost always messy, and rarely are they kept up to date. However, WP-MVC simply
                overlays an MVC-OOP framework on top of WordPress, making rapid development possible and easy to keep clean.
            </p>
            <div class="light-hr"></div>
            <p class="laed text-center">
                I work with the following technologies:
                <br></br>
                LAMP - PHP7 - MySQL - Javascript/Jquery/AJAX/JSON/API's
                <br></br>
                CSS3/SASS - HTML5 - Bootstrap - Wordpress - Git - cURL - e-commerce
            </p>
            <div class="light-hr"></div>
            <button type="button" class="btn m-3 btn-outline-primary" data-toggle="modal" data-target="#resume">
                Resume
            </button>
            <button type="button" class="btn my-3 mx-xs-1 mx-sm-3 btn-outline-primary" data-toggle="modal" data-target="#predictive-index">
                Predictive Index Report
            </button>
            <br>
            <a type="button" class="btn m-3 btn-outline-info" href="https://www.linkedin.com/in/mckenna-hampton-a12390159">
                LinkedIn
            </a>
            <a type="button" class="btn m-3 btn-outline-success" href="https://github.com/mckennahampton">
                GitHub
            </a>

            <!-- Resume Modal -->
            <div class="modal fade" id="resume" tabindex="-1" role="dialog" aria-labelledby="resume" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="resumeLabel">My resume</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/resume_Page_1.jpg" alt="Resume Page 1" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/resume_Page_2.jpg" alt="Resume Page 2" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Predictive Index Modal -->
            <div class="modal fade" id="predictive-index" tabindex="-1" role="dialog" aria-labelledby="resume" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="resumeLabel">Predictive Idex</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/predictive-index_Page_1.jpg" alt="Predictive Index Page 1" />
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/predictive-index_Page_2.jpg" alt="Predictive Index Page 2" />
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="light-hr"></div>

<?php
$portfolio_model = mvc_model('Portfolio');
//this loads all of them
$portfolios = $portfolio_model->find();
$portfolioCount = count($portfolios);
$i = 1;
foreach ($portfolios as $portfolio) { ?>

<div class="row p-5 justify-content-center">

    <div class="col-xs-12 col-sm-6 portfolio-block">
        <div class="row align-items-center">
            <div class="col-xs-12 col-sm-6 my-4 portfolio-img">
                <img src="<?php echo get_stylesheet_directory_uri() . $portfolio->client_logo; ?>" alt="Client Logo"/>
                <?php if (!empty($portfolio->this_site_url)) { ?>
                    <br></br>
                    <a type="button" target="_blank" href="<?php echo $portfolio->this_site_url; ?>" class="btn py-2 my-2 btn-outline-primary">View Site</a>
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-6 portfolio-text">
            <p><?php echo $portfolio->description; ?></p>
                <div class="light-hr"></div>
                <p>
                    <strong>Client</strong> - <?php echo $portfolio->name; ?>
                    <br></br>
                    <strong>Platform</strong> - <?php echo $portfolio->platform; ?>
                    <br></br>
                    <strong>Technologies</strong> - <?php echo $portfolio->technologies; ?>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
if ($portfolioCount !== $i) {
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