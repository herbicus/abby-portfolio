<?php 

/* Template Name: About Page */

?>

<?php get_header(); ?>

<!-- HEADER AND NAV/MOBILE NAV -->     
 <header>

    <div class="l-desktop-header l-row">
        <div class="l-top-header">
            <h1>Abby Pickus</h1>

            <nav class="l-header-nav">
                <? wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
            <br/>

            <!-- Categories Nav -->
            <!-- <nav class="l-categories-nav">
                <ul class="controls">
                    <li class="filter" data-filter=".illustration"><a href="#">Illustration</a></li>
                    <li class="filter" data-filter=".design"><a href="#">design</a></li>
                    <li class="filter" data-filter=".lettering"><a href="#">lettering</a></li>
                    <li class="filter" data-filter=".design"><a href="#">all</a></li>
                </ul>
            </nav> -->
        </div>

    </div>

    <!-- Mobile Nav/Header -->
    <div class="l-mobile-header">

    </div> 

    
 </header>

<!-- END HEADER -->

<section class="l-about-me">

    <div class="l-row">

        <?
            $aboutImg = get_field('about_image')['url'];
        ?>   

        <aside class="l-sidebar-container">
            <img src="<?= $aboutImg ?>">
            <h5>I like lists, <span class="l-about-toggle-btn">here is a list about me</span></h5>
        </aside>

        <div class="l-main-container">
            <h1 class="full-width">Hi There</h1>
            <br>
            <!-- <div class="half">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium consequuntur culpa, cum deleniti dolores ea est eveniet, explicabo illo, labore magni quasi quidem quod saepe sapiente voluptates voluptatibus? Itaque, tempore!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus animi atque autem blanditiis consequatur distinctio ea, eaque eum illum laboriosam laborum possimus provident quas recusandae saepe soluta sunt unde, veniam!</p>
            </div>
            <div class="half">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto asperiores blanditiis doloremque dolorum fugiat harum ipsa ipsum iure, laboriosam modi mollitia, nisi praesentium quas quia, rem sequi similique sint?</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at atque deserunt eligendi esse eveniet explicabo hic illum in incidunt inventore itaque, molestias nam quam quia recusandae repellat ut vero!</p>
            </div> -->
            <? if( have_rows('about_content') ) : ?>
            <? while( have_rows('about_content') ) : the_row(); ?>
                <?
                    $paragraph = get_sub_field('paragraph');
                ?>
                <p><?= $paragraph ?></p>
            <? endwhile; ?>
            <? endif; ?>
        </div>

    </div>

    <div class="l-about-infographic content-wrap text-center">
        <?
            $aboutInfographic = get_field('about_infographic')['url'];
        ?>
        <img src="<?= $aboutInfographic ?>" class="l-about-graph" alt="infographic"/>
        <!-- <img src="<?= get_template_directory_uri(); ?>/assets/img/infographic.png" class="l-about-graph" alt="infographic"/> -->
    </div>

</section>

 <!-- ABOUT -->


 <!-- END ABOUT -->

 <!-- Back to Top Button -->
<!-- <button class="l-top-btn" role="button">∧</button> -->

<?php get_footer(); ?>
