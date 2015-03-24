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

 <!-- MAIN SECTION -->
 <?
    $pTitle1 = get_field('project_title1');
    $pTitle2 = get_field('project_title2');
    $pCopy = get_field('project_copy');
 ?>
 <section class="l-single-works-page">

     <div class="l-row">

         <!-- Mobile "Sidebar" - so this will appear above images on mobile! -->
         <aside class="l-sidebar-container text-center l-mobile-display">
            <h1>Project Title</h1>
            <h4><?= $pTitle2 ?></h4>
            <br/>
            <p><?= $pCopy ?></p>
         </aside>

         <!-- Works Image Container -->
         <div class="l-main-container text-center">
             <? if( have_rows('project_images') ) : ?>
             <? while( have_rows('project_images') ) : the_row(); ?>
                 <?
                     $img = get_sub_field('image')['url'];
                     $caption = get_sub_field('caption');
                 ?>
                 <figure class="main-works-image">
                      <img src="<?= $img ?>" alt="Project Image">

                      <? if($caption) : ?>
                          <figcaption>
                             <?= $caption ?>
                          </figcaption>
                     <? endif; ?>
                 </figure>
             <? endwhile; ?>
             <? endif; ?>
         </div>

         <!-- Desktop Sidebar -->
         <aside class="l-sidebar-container text-center l-desktop-display">
             <h1>Project Title</h1>
             <h4><?= $pTitle2 ?></h4>
             <br/>
             <p><?= $pCopy ?></p>
         </aside>

     </div>

 </section>

<!-- Back to Top Button -->
<!-- <button class="l-top-btn" role="button">∧</button>
 -->
 <!-- END MAIN -->

<?php get_footer(); ?>