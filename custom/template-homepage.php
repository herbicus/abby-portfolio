<?php 

/* Template Name: Home Page */

?>

<?php get_header(); ?>



<!-- HEADER AND NAV/MOBILE NAV -->     
 <header>

    <div class="l-desktop-header l-row">
        <div class="l-top-header">
            <h1><a href="../"></a>Abby Pickus</h1>

            <nav class="l-header-nav">
                <? wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </nav>
            <br/>

            <!-- Categories Nav -->
            <nav class="l-categories-nav">
                <ul class="controls">
                    <li class="filter" data-filter=".illustration"><a href="#">Illustration</a></li>
                    <li class="filter" data-filter=".design"><a href="#">design</a></li>
                    <li class="filter" data-filter=".branding"><a href="#">branding</a></li>
                    <li class="filter" data-filter="all"><a href="#">all</a></li>
                </ul>
            </nav>
        </div>

    </div>

    <!-- Mobile Nav/Header -->
    <div class="l-mobile-header">

    </div> 

    
 </header>

<!-- END HEADER -->

<section class="l-works-grid">

            <div class="l-row">

                <?
                    $heroImg = get_field('hero_image');
                ?>   

               
                <img src="<?= $heroImg ?>" class="pull-left l-works-hero" alt="hero"/>

                <?php 

                    $workArgs = array (
                        'post_type'              => 'so_project',
                        'order'                  => 'ASC',
                        'posts_per_page'         => '-1'
                    );

                    $workQuery = new WP_Query( $workArgs );
                     
                ?>

                <?php if ( $workQuery -> have_posts() ): ?>
                <?php while ( $workQuery -> have_posts() ): ?>
                    <?php $workQuery -> the_post();?>
                    <?
                        $post_thumbnail_id = get_post_thumbnail_id();
                        $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
                        $cats = get_the_category();
                        $thumbCat = get_field('thumb_category');
                    ?>

                    <a href="<?= the_permalink(); ?>">

                        <figure class="three-col mix <? foreach($cats as $c) : ?><?= $c->slug . " "; ?><? endforeach; ?>" data-myorder="<? foreach($cats as $c) : ?><?= $c->term_id; ?><? endforeach; ?>">
                            <img src="<?= $post_thumbnail_url ?>" alt="">

                            <figcaption class="l-stroke-1">
                                <?php the_title(); ?>
                                <br>
                                <small><?= $thumbCat ?></small>
                            </figcaption>
                        </figure>
                    </a>

                <?php endwhile; ?>
                <?php endif; ?>

            </div>

        </section>

 <!-- Back to Top Button -->
 <!-- <button class="l-top-btn" role="button">∧</button>
 -->
 <!-- END MAIN -->


<?php get_footer(); ?>
