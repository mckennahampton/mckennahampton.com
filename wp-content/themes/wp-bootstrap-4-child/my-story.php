<?php

/*
Template Name: My Story
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

$age =  date_diff(date_create('1995-06-14'), date_create('today'))->y;

get_header();
?>

<div class="row p-5 justify-items-center">
        <div class="content-block">
            <h1>Education</h1>
            <p>
                I was born and raised in Guthrie, Oklahoma. I was homeschooled, and at 8th grade
                I was essentially self taught. My parents got good slef-teaching books, and I made my
                own schedule. In the winter of 2012, I got a 30 on the SAT test, and my parents considered
                me graduated.
            </p>

            <div class="light-hr"></div>

            <h1>Work History</h1>
            <p>Right after I took the SAT test, I started working full-time at my family's company,
                Magic Bait. I'd worked there in the summers for a few years prior. I was a general
                labor hand, helping with production.
                <br></br>
                In 2014, the company website was horrifically outdated. It was an old server package
                that was essentially just a catalog listing, and you <span class="font-italic">had to
                pay the webmaster just to add something to it</span>. I was always into tech, and I
                had a realization: I can learn how to build a new website.
                <br></br>
                I bought some books, and started digging in. About five months later, I was trying to
                make something good from using WordPress and WooCommerce. Seeing I had promise, my family
                solicited Jason Murphey, a family friend and PHP developer, to come help me build it.
                In another few months, we had a functioning e-commerce website, and I had working knowledge
                of how this stuff actually worked.
                <br></br>
                Over the next year, I continued learning all I could, updating the UI to load products via
                AJAX, implementing user accounts, cleaned up the database, and even built an algorithm that
                returned the smallest box necessary to ship an individual order.
                <br></br>
                I've taken a few freelance jobs on the side, utilizing WordPress to deliver clean, turn-key websites.
                My job duties at Magic Bait have evolved into being full-time production manager, responsible for
                product mixing, warehouse inventory, employee training & management, equipment cleaning & maintinence,
                and whatever else comes up. I am still in charge of the company website, but I haven't had the time I'd
                prefer to really keep it up to date. This is why I decided to take up a new project: Magic Bait 2.0
                <br></br>
                I am currently building a brand-new version of the company website in ASP.NET/C#. Since this is a new
                language for me, I'm using nopCommerce as the e-commerce engine, which was just updated to v4.1, using
                ASP.NET Core 2.0. I figured if I'm gonna learn it, I better learn the cutting edge.
            </p>

            <div class="light-hr"></div>

            <h1>About Me</h1>
            <p>
                I'm <?php echo $age; ?> years old, live in Guthrie, OK with my wife Hannah.
                <br></br>
                I'm a craftsman who enjoys being productively creative, and creatively productive. I'm a very quick learner
                with an eye for detail, and one of my favorite things to do is dive into something completely new and
                challenge myself to figure it out.
            </p>
        </div>
</div>

<?php
get_footer();
?>