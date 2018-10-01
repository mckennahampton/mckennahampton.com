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

  $data_ls = 'data-ls="
  durationin:1500;
  delayin:100;
  easingin:easeInOutExpo;
  durationout:500;
  easingout:easeInExpo;
  hover:true;
  hoveroffsetx: -20px;
  hoveroffsety: -20px;"';
  
  ?>

<div id="homepageLargeSlider" style="width: 1920px; height: 1000px;">

    <!-- First slide -->
    <div class="ls-slide">

        <!--Space Background-->
        <div class="ls-l" style="
            width: 1200px;
            height: 1500px;
            top: 50%;
            left: 75%;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/space.jpg" alt="Space Background" style="height: auto; width: 100%;">
        </div>

        <!--Lines Background-->
        <div class="ls-l" style="
            width: 960px;
            height: 1000px;
            left: 25%;
            top: 50%;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lines.jpg" alt="Line Background" style="width: 100%; height: auto;">
        </div>

        <!--Middle Line-->
        <div class="ls-l" style="
            width: 20px;
            height: 100%;
            left: 50%;
            top: 50%;
            background: #000;
        ">
        </div>

        <!--Circle-->
        <div class="ls-l" style="
            width: 950px;
            height: 950px;
            left: 50%;
            top: 50%;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/circle.png" alt="Circle" style="width: 100%; height: auto;">
        </div>

        <!-- Right Brain 1 -->
        <div class="ls-l" style="
            width: 207px;
            height: 258px;
            left: 960px;
            top: 50px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/1.png" alt="Right Brain Section 1">
        </div>

        <!-- Right Brain 2 -->
        <div class="ls-l" style="
        width: 258px;
        height: 243px;
        left: 978px;
        top: 188px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/2.png" alt="Right Brain Section 2">
        </div>

        <!-- Right Brain 3 -->
        <div class="ls-l" style="
        width: 236px;
        height: 178px;
        left: 1003px;
        top: 385px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/3.png" alt="Right Brain Section 3">
        </div>

        <!-- Right Brain 4 -->
        <div class="ls-l" style="
        width: 126px;
        height: 238px;
        left: 956px;
        top: 395px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/4.png" alt="Right Brain Section 4">
        </div>

        <!-- Right Brain 5 -->
        <div class="ls-l" style="
        width: 219px;
        height: 236px;
        left: 1000px;
        top: 490px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/5.png" alt="Right Brain Section 5">
        </div>

        <!-- Right Brain 6 -->
        <div class="ls-l" style="
        width: 123px;
        height: 222px;
        left: 1058px;
        top: 640px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/6.png" alt="Right Brain Section 6">
        </div>

        <!-- Right Brain 7 -->
        <div class="ls-l" style="
        width: 96px;
        height: 190px;
        left: 953px;
        top: 706px;
        ">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Right Brain Sections/7.png" alt="Right Brain Section 7" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 1 -->
        <div class="ls-l" style="
        width: 99px;
        height: 19px;
        left: 809px;
        top: 62px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/1.png" alt="Left Brain Section 1" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 2 -->
        <div class="ls-l" style="
        width: 142px;
        height: 25px;
        left: 809px;
        top: 62px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/2.png" alt="Left Brain Section 2" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 3 -->
        <div class="ls-l" style="
        width: 174px;
        height: 27px;
        left: 779px;
        top: 68px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/3.png" alt="Left Brain Section 3" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 4 -->
        <div class="ls-l" style="
        width: 200px;
        height: 25px;
        left: 754px;
        top:81px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/4.png" alt="Left Brain Section 4" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 5 -->
        <div class="ls-l" style="
        width: 223px;
        height: 25px;
        left: 735px;
        top: 102px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/5.png" alt="Left Brain Section 5" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 6 -->
        <div class="ls-l" style="
        width: 244px;
        height: 25px;
        left: 711px;
        top: 130px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/6.png" alt="Left Brain Section 6" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 7 -->
        <div class="ls-l" style="
        width: 271px;
        height: 31px;
        left: 686px;
        top: 151px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/7.png" alt="Left Brain Section 7" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 8 -->
        <div class="ls-l" style="
        width: 297px;
        height: 29px;
        left: 669px;
        top: 171px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/8.png" alt="Left Brain Section 8" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 9 -->
        <div class="ls-l" style="
        width: 312px;
        height: 27px;
        left: 650px;
        top: 204px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/9.png" alt="Left Brain Section 9" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 10 -->
        <div class="ls-l" style="
        width: 329px;
        height: 25px;
        left: 633px;
        top: 225px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/10.png" alt="Left Brain Section 10" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 11 -->
        <div class="ls-l" style="
        width: 352px;
        height: 33px;
        left: 612px;
        top: 255px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/11.png" alt="Left Brain Section 11" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 12 -->
        <div class="ls-l" style="
        width: 373px;
        height: 28px;
        left: 598px;
        top: 280px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/12.png" alt="Left Brain Section 12" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 13 -->
        <div class="ls-l" style="
        width: 389px;
        height: 28px;
        left: 585px;
        top: 312px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/13.png" alt="Left Brain Section 13" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 14 -->
        <div class="ls-l" style="
        width: 400px;
        height: 30px;
        left: 575px;
        top: 345px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/14.png" alt="Left Brain Section 14" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 15 -->
        <div class="ls-l" style="
        width: 404px;
        height: 31px;
        left: 565px;
        top: 381px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/15.png" alt="Left Brain Section 15" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 16 -->
        <div class="ls-l" style="
        width: 410px;
        height: 30px;
        left: 564px;
        top: 417px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/16.png" alt="Left Brain Section 16" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 17 -->
        <div class="ls-l" style="
        width: 406px;
        height: 29px;
        left: 571px;
        top: 469px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/17.png" alt="Left Brain Section 17" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 18 -->
        <div class="ls-l" style="
        width: 392px;
        height: 38px;
        left: 575px;
        top: 517px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/18.png" alt="Left Brain Section 18" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 19 -->
        <div class="ls-l" style="
        width: 362px;
        height: 25px;
        left: 584px;
        top: 571px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/19.png" alt="Left Brain Section 19" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 20 -->
        <div class="ls-l" style="
        width: 314px;
        height: 25px;
        left: 604px;
        top: 638px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/20.png" alt="Left Brain Section 20" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 21 -->
        <div class="ls-l" style="
        width: 232px;
        height: 25px;
        left: 638px;
        top: 716px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/21.png" alt="Left Brain Section 21" style="width: 100%; height: auto;">
        </div>

        <!-- Left Brain 22 -->
        <div class="ls-l" style="
        width: 150px;
        height: 20px;
        left: 654px;
        top: 779px;
        "
        <?php echo $data_ls; ?>>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Left Brain Sections/22.png" alt="Left Brain Section 22" style="width: 100%; height: auto;">
        </div>

    </div>

</div>
      
	<?php get_footer(); ?>