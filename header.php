<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agriview24
 */

// Get options
$options = get_option( 'my_options_framework' ); // unique id of the framework

// $logo = echo $options['site-logo']; 
// $head_ads = echo $options['header-ads']; 

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/Logo/favicon.ico">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<!-- site or application content here -->

<!-- ============================
	Header Top Section start
================================= -->
<div class="header-top-area">
    <div class="container">
        <div class="row pt-10">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="media">
                    <div class="time-area media-left"> <!-- date("g:i a"); -->
                        <p class="time">
                            <span><?php echo date_i18n(get_option('time_format')); ?></span>

                        </p>
                    </div>
                    <div class="social-media media-right">
                        <ul class="social-nav">
                            <li><a href="https://www.facebook.com/agriview24bd/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube tube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!---- ============================
	  Header Top Section End
================================= ---->
<!-- =========================
	Header Logo Area start
============================ -->
<div class="Header-logo">
    <div class="container">
        <div class="row pt-10 pb-10">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="main-logo">
                    <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo $options['site-logo']; ?>" alt="logo" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="header-add text-right">
                    <a href="<?php echo $options['ads-url']; ?>" target="_blank"><img src="<?php echo $options['header-ads']; ?>" alt="ads" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!---- =======================
    Header Logo Area End
============================ ---->
<!-- ==============================
	   Top menu start
================================== -->
<div class="header-top-menu">
    <div class="container">
        <div class="bg-color">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="date-area">

                        <h5><?php echo date_i18n(get_option('date_format')); ?></h5>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <nav class="top-menu">
                        <?php
                        // Menu Location
                        wp_nav_menu( array(
                                'menu'              => 'Secondary Menu',
                                'theme_location'    => 'second_menu',
                                'depth'             => 3,
                                'container'         => '',
//                                'container_class'   => 'top-menu',
//                            'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav-top',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                        );
                        ?>
                        <div class="search_area">
                            <form action="<?php bloginfo('home'); ?>" method="GET" accept-charset="UTF-8">
                                <input type="search" name="s" value="<?php the_search_query(); ?>">
                                <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!---- =======================
      Top Menu End
============================ ---->
<!---- =======================
      Main-Menu Start
============================ ---->
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="responsive-menu-wrap"></div>
                <div class="main_menu"><!-- start of main_menu -->
                    <?php
                    // Menu Location
                    wp_nav_menu( array(
                            'menu'              => 'Main Menu',
                            'theme_location'    => 'main_menu',
                            'depth'             => 3,
                            'container'         => 'nav',
//                            'container_class'   => 'collapse navbar-collapse',
//                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'navigation',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'walker'            => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div><!-- End of main_menu -->
            </div>
        </div>
    </div>
</div>
<!---- =======================
	    Main-Menu End
============================ ---->
    <!---- ==========================
        Body-banner Section start
    ================================ ---->
    <div class="body-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ads">
                        <a href="<?php echo $options['ads-url1']; ?>" target="_blank"><img src="<?php echo $options['below-ads1']; ?>" alt="ads" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ads">
                        <a href="<?php echo $options['ads-url2']; ?>" target="_blank"><img src="<?php echo $options['below-ads2']; ?>" alt="ads" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ads">
                        <a href="<?php echo $options['ads-url3']; ?>" target="_blank"><img src="<?php echo $options['below-ads3']; ?>" alt="ads" class="img-fluid"></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="ads ">
                        <a href="<?php echo $options['ads-url4']; ?>" target="_blank"><img src="<?php echo $options['below-ads4']; ?>" alt="ads" class="img-fluid"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- =======================
        Body-banner Section End
    ============================ ---->
   <!---- ===============================
         News-Ticker-Area Section start
    ==================================== ---->
    <div class="news-ticker-area">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="news-title">
                        <strong>শিরোনাম</strong>
                    </div>
                    <div class="add_content news-bg">
                        <marquee behavior="scroll" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()">
                            <ul>
                                <?php 
                                      $heading = null;
                                      $heading = new WP_Query(array(
                                          'post_type' => 'post',
                                          'posts_per_page' => -1
                                      ));
                                      while ( $heading->have_posts() ) : $heading->the_post();
                                      
                                  ?>            
                                    <li>
                                        <div class="coin-container">
                                            <a href="<?php the_permalink(); ?>">
                                                <span class="ccpw_icon"><i class="fas fa-dot-circle"></i></span>
                                                <span class="name"><?php the_title(); ?></span>
                                            </a>
                                        </div>
                                    </li> 

                                  <?php endwhile; 
                                      wp_reset_postdata(); 
                                  ?>  
                               
                            </ul>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---- ===========================
        News-Ticker-Area Section End
    ================================ ---->