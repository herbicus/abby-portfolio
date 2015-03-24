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

 <!-- ABOUT -->  

    <div class="l-blog-wrap l-row">

        <aside class="sidebar">
            <h2>Archive</h2>
            <ul>
                <? wp_get_archives('type=postbypost&limit=100'); ?>
            </ul>
            <hr>

            <!--  SHARE DROPDOWN BTN -->
            <div class="l-share-btn">
                <h6 role="button">SHARE</h6>
            </div>

            <!-- SOCIAL ICONS NAV -->
            <nav class="social-nav social-share">
                <ul>
                    <!-- LinkedIn -->
                    <li><a class="icon-in" href="http://www.linkedin.com/shareArticle?mini=true&url=<?= the_permalink(); ?>" target="_blank">j</a></li>

                    <!-- Facebook -->
                    <li><a class="icon-face" href="http://www.facebook.com/sharer.php?u=<?= the_permalink(); ?>" target="_blank">b</a></li>

                    <!-- Twitter -->
                    <li><a class="icon-twit" href="http://twitter.com/share?url=<?= the_permalink(); ?>&text=Herb Torres&hashtags=herb_torres" target="_blank">a</a></li>

                    <!-- Pinterest --> 
                    <li><a class="icon-pin" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">d</a></li>
                </ul>
            </nav>
        </aside>

         

        <div class="l-main-container l-blog-container">
            
            <?php if(have_posts()): ?>    
            <?php while(have_posts()): the_post(); ?>

            <h1><? the_title(); ?></h1>
            <div><? the_content(); ?></div>

            <cite><?php the_author(); ?></cite>
            <small><?php the_time('F j, Y'); ?></small>


            <?php endwhile; ?>
            <?php endif; ?>
        </div>    

     </div>

 <!-- END ABOUT -->

 <!-- Back to Top Button -->
<button class="l-top-btn" role="button">∧</button>

 <!-- FOOTER SECTION -->
<footer>
    <div class="l-row">
        <nav class="footer-nav social nav">
            <ul class="footer-right">
                <li><a href="https://twitter.com/herb_x" target="_blank">a</a></li>
                <li><a href="www.linkedin.com/pub/herb-torres/a1/aa1/7b5/en" target="_blank">j</a></li>
                <li><a href="https://www.facebook.com/herb.torres.73" target="_blank">b</a></li>
                <li><a href="www.github.com/herbicus" target="_blank">Q</a></li>
                <li><a href="mailto:herbtorres960@gmail.com" target="_blank">@</a></li>
            </ul>
        </nav>
    </div>
</footer>

<?php get_footer(); ?>
