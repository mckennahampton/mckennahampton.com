<?php

/*
Template Name: Home Page
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

  $data_ls_left = "rotate: 45; hoveroffsetx: -80px;";
  $data_ls_right = "loop:true;looprotate:random(-20,20);loopstartat:transitioninstart;loopyoyo:true;loopcount:-1;";
  $data_both = "hover: true;";
  
  ?>
<div class="layerslider-container-outer"
    style="
        width: 100%;
        background: url('<?php echo get_stylesheet_directory_uri(); ?>/img/space.jpg');
        "
>
    <div class="ls-tilt" style="width: 100%;">
        <div class="layerslider-container-inner" style="max-width: 800px; margin: 0 auto;">
            <div id="homepageLargeSlider"  style="width: 800px; height: 800px;">

                <!-- First slide -->
                <div class="ls-slide">

                    <!--Circle-->
                    <div class="ls-l" style="
                        width: 700px;
                        height: 700px;
                        left: 50%;
                        top: 50%;
                    ">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/circle.png" alt="Circle" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 1 -->
                    <div class="ls-l" style="
                        width: 198px;
                        height: 246px;
                        left: 425px;
                        top: 75px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"

                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/1.png" alt="Right Brain Section 1" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 2 -->
                    <div class="ls-l" style="
                    width: 246px;
                    height: 232px;
                    left: 438px;
                    top: 172px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"

                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/2.png" alt="Right Brain Section 2" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 3 -->
                    <div class="ls-l" style="
                    width: 225px;
                    height: 170px;
                    left: 455px;
                    top: 312px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"

                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/3.png" alt="Right Brain Section 3" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 4 -->
                    <div class="ls-l" style="
                    width: 121px;
                    height: 228px;
                    left: 422px;
                    top: 319px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"
                    
                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/4.png" alt="Right Brain Section 4" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 5 -->
                    <div class="ls-l" style="
                    width: 209px;
                    height: 225px;
                    left: 453px;
                    top: 388px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"
                    
                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/5.png" alt="Right Brain Section 5" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 6 -->
                    <div class="ls-l" style="
                    width: 117px;
                    height: 212px;
                    left: 495px;
                    top: 493px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"
                    
                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/6.png" alt="Right Brain Section 6" style="width: 100%; height: auto;">
                    </div>

                    <!-- Right Brain 7 -->
                    <div class="ls-l" style="
                    width: 93px;
                    height: 182px;
                    left: 420px;
                    top: 540px;
                    "
                    data-ls="<?php echo $data_both .  $data_ls_right; ?>loopduration:10000;"
                    
                    >
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/7.png" alt="Right Brain Section 7" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 1 -->
                    <div class="ls-l" style="
                    width: 99px;
                    height: 19px;
                    left: 325px;
                    top: 90px;
                    "

                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/1.png" alt="Left Brain Section 1" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 2 -->
                    <div class="ls-l" style="
                    width: 139px;
                    height: 25px;
                    left: 292px;
                    top: 105px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/2.png" alt="Left Brain Section 2" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 3 -->
                    <div class="ls-l" style="
                    width: 170px;
                    height: 27px;
                    left: 263px;
                    top: 127px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/3.png" alt="Left Brain Section 3" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 4 -->
                    <div class="ls-l" style="
                    width: 195px;
                    height: 25px;
                    left: 242px;
                    top:150px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/4.png" alt="Left Brain Section 4" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 5 -->
                    <div class="ls-l" style="
                    width: 218px;
                    height: 25px;
                    left: 222px;
                    top: 175px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/5.png" alt="Left Brain Section 5" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 6 -->
                    <div class="ls-l" style="
                    width: 239px;
                    height: 25px;
                    left: 203px;
                    top: 200px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/6.png" alt="Left Brain Section 6" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 7 -->
                    <div class="ls-l" style="
                    width: 265px;
                    height: 31px;
                    left: 179px;
                    top: 224px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/7.png" alt="Left Brain Section 7" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 8 -->
                    <div class="ls-l" style="
                    width: 290px;
                    height: 29px;
                    left: 159px;
                    top: 249px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/8.png" alt="Left Brain Section 8" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 9 -->
                    <div class="ls-l" style="
                    width: 313px;
                    height: 27px;
                    left: 142px;
                    top: 275px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/9.png" alt="Left Brain Section 9" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 10 -->
                    <div class="ls-l" style="
                    width: 322px;
                    height: 25px;
                    left: 128px;
                    top: 299px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/10.png" alt="Left Brain Section 10" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 11 -->
                    <div class="ls-l" style="
                    width: 343px;
                    height: 33px;
                    left: 111px;
                    top: 328px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/11.png" alt="Left Brain Section 11" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 12 -->
                    <div class="ls-l" style="
                    width: 364px;
                    height: 28px;
                    left: 95px;
                    top: 355px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/12.png" alt="Left Brain Section 12" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 13 -->
                    <div class="ls-l" style="
                    width: 380px;
                    height: 28px;
                    left: 83px;
                    top: 383px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/13.png" alt="Left Brain Section 13" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 14 -->
                    <div class="ls-l" style="
                    width: 390px;
                    height: 31px;
                    left: 72px;
                    top: 411px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/14.png" alt="Left Brain Section 14" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 15 -->
                    <div class="ls-l" style="
                    width: 395px;
                    height: 31px;
                    left: 63px;
                    top: 438px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/15.png" alt="Left Brain Section 15" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 16 -->
                    <div class="ls-l" style="
                    width: 400px;
                    height: 30px;
                    left: 56px;
                    top: 466px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/16.png" alt="Left Brain Section 16" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 17 -->
                    <div class="ls-l" style="
                    width: 396px;
                    height: 29px;
                    left: 62px;
                    top: 503px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/17.png" alt="Left Brain Section 17" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 18 -->
                    <div class="ls-l" style="
                    width: 383px;
                    height: 38px;
                    left: 66px;
                    top: 533px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/18.png" alt="Left Brain Section 18" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 19 -->
                    <div class="ls-l" style="
                    width: 353px;
                    height: 25px;
                    left: 80px;
                    top: 563px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/19.png" alt="Left Brain Section 19" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 20 -->
                    <div class="ls-l" style="
                    width: 307px;
                    height: 25px;
                    left: 101px;
                    top: 594px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/20.png" alt="Left Brain Section 20" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 21 -->
                    <div class="ls-l" style="
                    width: 226px;
                    height: 25px;
                    left: 139px;
                    top: 624px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/21.png" alt="Left Brain Section 21" style="width: 100%; height: auto;">
                    </div>

                    <!-- Left Brain 22 -->
                    <div class="ls-l" style="
                    width: 147px;
                    height: 20px;
                    left: 166px;
                    top: 641px;
                    "
                    data-ls="<?php echo $data_ls_left . $data_both; ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/22.png" alt="Left Brain Section 22" style="width: 100%; height: auto;">
                    </div>

                </div>

            </div>
        </div>
</div>
</div>
      
	<?php get_footer(); ?>