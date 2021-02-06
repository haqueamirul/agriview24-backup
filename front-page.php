<?php
/*
Template Name: Homepage
*/
get_header();

//get_template_part( 'template-parts/homepage/slider' );
$options = get_option( 'my_options_framework' ); 

?>
<main>


    <!---- ==========================
        Slider Section start
    ================================ ---->
    <main>
        <div class="slider-section">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="slider-area">
                            <div class="slider-active">
                                <?php 
                                      $heading = null;
                                      $heading = new WP_Query(array(
                                          'post_type' => 'post',
                                          'posts_per_page' => 5
                                      ));
                                      while ( $heading->have_posts() ) : $heading->the_post();
                                      
                                  ?>            
                                    <div class="single-slider">
                                        <?php the_post_thumbnail('cover', array('class' => 'single-slider') ); ?>
                                        
                                        <div class="slider-content">
                                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                        </div>
                                    </div> 

                                  <?php endwhile; 
                                      wp_reset_postdata(); 
                                  ?>  
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="tag-title">
                                    <span>সর্বশেষ খবর</span>
                                </div>
                                <div class="tag-area latest-news">
                                    <?php 
                                      $heading = null;
                                      $heading = new WP_Query(array(
                                          'post_type' => 'post',
                                          'posts_per_page' => 5
                                      ));
                                      while ( $heading->have_posts() ) : $heading->the_post();
                                      
                                      ?>            
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?></a>
                                            </div>
                                            <div class="media-right">
                                                <a href="<?php the_permalink(); ?>"><span class="mt-0"><?php the_title(); ?></span></a>
                                            </div>
                                        </div> 

                                      <?php endwhile; 
                                          wp_reset_postdata(); 
                                      ?>  
                                    
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <div class="d-flex justify-content-right">
                                    <ul class="nav navbar-tab" role="tablist">
                                        <li class="nav-item">
                                            <a href="#step-2" id="step2-tab" class="nav-link" aria-selected="false" data-toggle="tab"
                                               role="tab">অনলাইন</a>
                                        </li>
                                        <li class="nav-item nav-active">
                                            <a href="#step-1" id="step1-tab" class="nav-link active" aria-selected="true" data-toggle="tab"
                                               role="tab">সর্বাধিক পঠিত</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="step-1" aria-labelledby="step1-tab" role="tabpanel">
                                        <ul class="tab-details">
                                            <?php 
                                            $popularpost  = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 12,
                                                'meta_key' => 'sunset_post_views',
                                                'orderby' => 'meta_value_num',
                                                'order' => 'DESC'
                                            ));
                                            while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>
                                             
                                            <li class="tab-link tab-color">
                                                <a href="<?php the_permalink(); ?>"><i class="fas fa-hand-point-right"></i><?php the_title(); ?></a> 
                                            </li>
                                             
                                            <?php endwhile;
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="step-2" aria-labelledby="step2-tab" role="tabpanel">
                                        <?php 
                                            $catonline=$options['cat-select-1'];
                                            $category_post  = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 12,
                                                'category__and'     => $catonline,
                                            ));
                                            while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                             
                                            <li class="tab-link tab-color">
                                                <a href="<?php the_permalink(); ?>"><i class="fas fa-hand-point-right"></i><?php the_title(); ?></a> 
                                               
                                            </li>
                                             
                                            <?php endwhile;
                                            ?>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =======================
            Slider Section End
        ============================ ---->
        <!---- =============================
            News Slider Area Section start
        ================================== ---->
        <div class="news-slider-area">
            <div class="container">
                <div class="row pt-10 pb-20">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="news-slider">
                            <div class="news-active">
                                <div class="single-news">
                                    <div class="news-slider-content">
                                        <div class="row">

                                            <?php 
                                            $catonline2=$options['cat-select-2'];
                                            $category_post  = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 3,
                                                'category__and'     => $catonline2,
                                            ));
                                            while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                             
                                            <div class="col-lg-4 col-md-4">
                                                <div class="media">
                                                    <div class="media-left news-img">
                                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?></a>
                                                    </div>
                                                    <div class="media-right news-text">
                                                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                        <p><span><?php echo cExcerpt('5') ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <?php endwhile;
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-news">
                                    <div class="news-slider-content">
                                        <div class="row">
                                            <?php 
                                            $catonline3=$options['cat-select-3'];
                                            $category_post  = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 3,
                                                'category__and'     => $catonline3,
                                            ));
                                            while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                             
                                            <div class="col-lg-4 col-md-4">
                                                <div class="media">
                                                    <div class="media-left news-img">
                                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?></a>
                                                    </div>
                                                    <div class="media-right news-text">
                                                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                        <p><span><?php echo cExcerpt('5') ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <?php endwhile;
                                            ?>

                                        </div>
                                    </div>
                                </div>
                                <div class="single-news">
                                    <div class="news-slider-content">
                                        <div class="row">
                                            <?php 
                                            $catonline4=$options['cat-select-4'];
                                            $category_post  = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 3,
                                                'category__and'     => $catonline4,
                                            ));
                                            while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                             
                                            <div class="col-lg-4 col-md-4">
                                                <div class="media">
                                                    <div class="media-left news-img">
                                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?></a>
                                                    </div>
                                                    <div class="media-right news-text">
                                                        <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                                        <p><span><?php echo cExcerpt('5') ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <?php endwhile;
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
            News Slider Area Section End
        ================================== ---->
        <!---- =============================
            Highlight Area Section Start
        ================================== ---->
        <div class="highlight-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="highlight-title" style="background: url(<?php echo $options['highlight-bg']; ?>)">
                            <h2 class="text-center"><?php echo $options['highlight-title']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row pt-20 pb-20">
                    <?php 
                    $highlight=$options['cat-higlight'];
                    $category_post  = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 8,
                        'category__and'     => $highlight,
                    ));
                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                     
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card-area">
                            <div class="card">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                <div class="card-body">
                                    <a href="<?php the_permalink(); ?>"><p class="card-text"><?php the_title(); ?></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <?php endwhile;
                    ?>
                   
                </div>
            </div>
        </div>
        <!---- =============================
            Highlight Area Section End
        ================================== ---->
        <!---- =============================
            Ads Main Area Section End
        ================================== ---->
        <?php if ($options['highlight-below-ads']): ?>
            
        <div class="ads-main-area">
            <div class="container">
                <div class="row pt-10 pb-20">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-ads text-center">
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $options['highlight-below-ads']; ?>" alt="ads-main" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <!---- =============================
            Ads Main Area Section End
        ================================== ---->
        <!---- =============================
             Feature Area Section start
        ================================== ---->
        <div class="feature-area">
            <div class="container">
                <div class="row pt-10 pb-40">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="nation-content">
                            <div class="feature-title f-right">
                                <strong><?php echo $options['national-title']; ?></strong>
                            </div>
                            <div class="nation-text">
                                <ul class="nation-nav">

                                    <?php 
                                        $national=$options['national-cat'];
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 7,
                                            'category__and'     => $national,
                                        ));
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                         
                                        <li class="nav-item">
                                            <a href="<?php the_permalink(); ?>" class="nav-link">
                                                <i class="fas fa-angle-double-right"></i><?php the_title(); ?>
                                            </a>
                                        </li>
                                         
                                        <?php endwhile;
                                        ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="nation-content">
                            <div class="feature-title f-right">
                                <strong><?php echo $options['centerr-title']; ?></strong>
                            </div>
                            <div class="nation-text">
                                <div class="row">

                                    <?php 
                                        $intnational=$options['centerr-cat'];
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 6,
                                            'category__and'     => $intnational,
                                        ));
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                         
                                        <div class="col-lg-6">
                                            <div class="focus-card">
                                                <div class="card">
                                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                                    <div class="card-body">
                                                        <a href="<?php the_title(); ?>"><p class="card-text"><?php the_title(); ?>
                                                            </p></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <?php endwhile;
                                        ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <div class="nation-content">
                            <div class="feature-title f-right">
                                <strong><?php echo $options['rights-title']; ?></strong>
                            </div>
                            <div class="nation-text">
                                <div class="impro-text">
                                    <ul class="list-unstyled">

                                        <?php 
                                        $recentpost=$options['rights-cat'];
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 3,
                                            'category__and'     => $recentpost,
                                        ));
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                         
                                        <li class="media">
                                            <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                            <div class="media-body">
                                                <p><?php echo cExcerpt('12'); ?></a>
                                            </div>
                                        </li>
                                         
                                        <?php endwhile;
                                        ?>

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
              Feature Area Section End
        ================================== ---->
        <!---- =============================
            Ads Main Area Section start
        ================================== ---->
        <div class="ads-main-area">
            <div class="container">
                <div class="row pb-20">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-ads text-center">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
              Ads Main Area Section End
        ================================== ---->
        <!---- =============================
             Content Area Section start
        ================================== ---->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="highlight-title" style="background: url(<?php echo $options['highlight-bg-one']; ?>)">
                            <h2 class="text-center"><?php echo $options['titlesec-one']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row content-bg">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <div class="content-area-left">
                             <?php 
                                $section_one=$options['cat-section-one'];
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 1,
                                    'category__and'     => $section_one,
                                ));
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                 
                                <div class="card">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>"><h1 class="card-title"><?php the_title(); ?></h1></a>
                                        <p class="card-text"><?php echo cExcerpt('35'); ?></p>
                                    </div>
                                </div>
                                 
                                <?php endwhile;
                                ?>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="content-area-right">
                            <div class="row">
                                <?php 
                                $section_one=$options['cat-section-one'];
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6,
                                    'category__and'     => $section_one,
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                 

                                <div class="col-lg-6">
                                    <div class="card">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"><p class="card-text"><?php the_title(); ?></p></a>
                                        </div>
                                    </div>
                                </div>
                                 
                                <?php endwhile;
                                 
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
              Content Area Area Section End
        ================================== ---->
        <!---- =============================
             ads-main-area Section start
        ================================== ---->
        <div class="ads-main-area">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-ads text-center">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
              ads-main-area Section End
        ================================== ---->
        <!---- ================================
           intertaitment-area Section start
        ===================================== ---->
        <div class="intertaitment-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="highlight-title" style="background: url(<?php echo $options['highlight-bg-two']; ?>)">
                            <h2 class="text-center"><?php echo $options['titlesec-two']; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row showbizz-bg">
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="showbizz-content-left">
                             <?php 
                                $leftSection=$options['cat-section-two-left'];
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 2,
                                    'category__and'     => $leftSection,
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                
                                <div class="card">
                                    <?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>"><p class="card-text"><?php the_title(); ?></p></a>
                                    </div>
                                </div>
                                 
                                <?php endwhile;
                                 
                                ?>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4 col-sm-12">
                        <div class="showbizz2-content-center">
                            <?php 
                                $centerSection=$options['cat-section-two-center']; 
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 1,
                                    'category__and'     => $centerSection,
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                
                                <div class="card">
                                    <?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?>
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                        <p class="card-text"><?php echo cExcerpt('30'); ?></p>
                                    </div>
                                </div>                              
                                 
                                <?php endwhile;
                                 
                                ?>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12">
                        <div class="showbizz3-content-right">
                            <?php 
                                $rightSection=$options['cat-section-two-right']; 
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 5,
                                    'category__and'     => $rightSection,
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                
                                <div class="media">
                                    <?php the_post_thumbnail('cover', array('class' => 'img-fluid mr-3') ); ?>
                                    <div class="media-body">
                                        <a href="<?php the_permalink(); ?>"><h5 class="show-text mt-0"><?php the_title(); ?></h5></a>
                                    </div>
                                </div>                             
                                 
                                <?php endwhile;
                                 
                                ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
            intertaitment-area Section End
        ================================== ---->
        <!---- ================================
            Content-news Section start
        ===================================== ---->
        <div class="content-news">
            <div class="container">
                <div class="row pt-40 pb-40">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="content-news-left">
                            <div class="content-news-title text-right">
                                <a href="#"><h4>নগর জীবন</h4></a>
                            </div>
                            <div class="media-content l-img pt-60">
                                <div class="media">
                                    <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news1.jpg" alt="news-content"></a>
                                    <div class="media-body">
                                        <a href="#"><p class="mt-0">আগে ভদ্র ছিলেন এখন চিকিৎসা দরকার : কাদের মির্জা প্রসঙ্গে এমপি একরাম</p></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news1.jpg" alt="news-content"></a>
                                    <div class="media-body">
                                        <a href="#"><p class="mt-0">আগে ভদ্র ছিলেন এখন চিকিৎসা দরকার : কাদের মির্জা প্রসঙ্গে এমপি একরাম</p></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news1.jpg" alt="news-content"></a>
                                    <div class="media-body">
                                        <a href="#"><p class="mt-0">আগে ভদ্র ছিলেন এখন চিকিৎসা দরকার : কাদের মির্জা প্রসঙ্গে এমপি একরাম</p></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news1.jpg" alt="news-content"></a>
                                    <div class="media-body">
                                        <a href="#"><p class="mt-0">আগে ভদ্র ছিলেন এখন চিকিৎসা দরকার : কাদের মির্জা প্রসঙ্গে এমপি একরাম</p></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news1.jpg" alt="news-content"></a>
                                    <div class="media-body">
                                        <a href="#"><p class="mt-0">আগে ভদ্র ছিলেন এখন চিকিৎসা দরকার : কাদের মির্জা প্রসঙ্গে এমপি একরাম</p></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news1.jpg" alt="news-content"></a>
                                    <div class="media-body">
                                        <a href="#"><p class="mt-0">আগে ভদ্র ছিলেন এখন চিকিৎসা দরকার : কাদের মির্জা প্রসঙ্গে এমপি একরাম</p></a>
                                    </div>
                                </div>
                                <a href="#" class="text-right l-link">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="content-news-center">
                            <div class="content-news-title text-right">
                                <a href="#"><h4>পূর্ব-পশ্চিম</h4></a>
                            </div>
                            <div class="media-content pt-60">
                                <div class="card center-card">
                                    <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/content-news2.jpg" alt="content-news2">
                                    <div class="card-body">
                                        <a href="#"><h5 class="card-title">আলাদা দল গঠনের হুমকি ট্রাম্পের</h5></a>
                                        <a href="#"><p class="card-text">মার্কিন সাবেক প্রেসিডেন্ট ডোনাল্ড ট্রাম্প সম্ভাব্য ইমপিচমেন্ট থেকে বাঁচতে আলাদা দল গঠনের হুমকি দিয়েছেন।…</p></a>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>লকডাউনে ভারতে ধনীদের ৩৫ শতাংশ সম্পদ বৃদ্ধি, বেকার বেড়েছে লক্ষাধিক
                                            </a></li>
                                        <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>দীর্ঘদিনের দ্বন্দ্ব নিরসনে আলোচনায় বসছে তুরস্ক ও গ্রিস</a></li>
                                    </ul>
                                    <a href="#" class="text-right l-link">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="content-news-right">
                            <div class="content-news-title text-right">
                                <a href="#"><h4>ই-পেপার</h4></a>
                            </div>
                            <div class="media-content r-img pt-60">
                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/sce.png" alt="sce" class="img-fluid"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---- =============================
            Content-news Section End
        ================================== ---->
        <!---- ================================
            main-content-area  start
        ===================================== ---->
        <section class="main-content-area">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <!-- start Of col-lg-8 col-md-12 col-sm-12 -->
                    <div class="col-lg-8 col-md-12 col-sm-12">

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-three']; ?>)">
                                <h3 class="text-center"><?php echo $options['highlight-title-three']; ?></h3>
                            </div>
                            
                            <div class="row pt-10 pb-10 bg-row">
                                <div class="col-lg-4 ">
                                    <div class="card i-text">
                                        <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/islamic1.jpg" alt="islamic1"></a>
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">ঋণমুক্তির তিন আমল</h5></a>
                                            <a href="#"><p class="card-text">পারস্পরিক সাহায্যে পূর্ণ হয়ে ওঠে মানুষের সামাজিক জীবন। সুখে-দুঃখে একে অন্যের পাশে…</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card i-text">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/islamic2.jpg" alt="islamic2">
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">মাদক থেকে দূরে থাকার নির্দেশনা দিয়েছে ইসলাম</h5></a>
                                            <a href="#"><p class="card-text">মানুষ সৃষ্টির সেরা। মানুষের জন্য যা কিছু কল্যাণকর ও উপকারী তা মহান আল্লাহ তাঁর পেয়ারা…</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="card i-text">
                                        <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/islamic3.jpg" alt="islamic3">
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">আল্লাহ ইমানদারদের মহান অভিভাবক</h5></a>
                                            <a href="#"><p class="card-text">আল্লাহ স্বয়ং নিজেকে ইমানদারদের অভিভাবক হিসেবে ঘোষণা করেছেন। এটি ইমানদারদের জন্য…</p></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">

                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-four']; ?>)">
                                <h3 class="text-center"><?php echo $options['highlight-title-four']; ?></h3>
                            </div>
                            <div class="row p-bg">
                                <div class="col-lg-8">
                                    <div class="card post-card p-bg">
                                        <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news1.jpg" alt="news1"></a>
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">কাতারে কিউএফসি’র প্রধান নির্বাহীর সঙ্গে রাষ্ট্রদূতের বৈঠক</h5></a>
                                            <a href="#"><p class="card-text">রাষ্ট্রদূত মো. জসীম উদ্দিন গতকাল কাতার ফাইন্যান্সিয়াল সেন্টারের (কিউএফসি) প্রধান নির্বাহী ইউসুফ আল জাইদার সাথে বৈঠক করেন। এসময় কিউএফসির…</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 media-card-text">
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">

                            <div class="row pt-20 pb-20">
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <div class="post-content-title">
                                            <a href="#"><h4>মাঠে ময়দানে</h4></a>
                                        </div>
                                        <div class="post-content-text pt-60">
                                            <div class="card">
                                                <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news3.jpg" alt="news3"></a>
                                                <div class="card-body">
                                                    <a href="#"><h5 class="card-title">পাকিস্তানকে ছাড়িয়ে অস্ট্রেলিয়ার পরই বাংলাদেশ</h5></a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>বাংলাওয়াশ উইন্ডিজ</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>কোচ ল্যাম্পার্ডকে বরখাস্ত করলো চেলসি</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>মুস্তাফিজের পর ক্যারিবীয় দূর্গে মিরাজের আঘাত</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>দেশের মাটিতে মাইলফলক সাকিবের </a></li>
                                                </ul>
                                                <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <div class="post-content-title">
                                            <a href="#"><h4>পাঁচফোড়ন</h4></a>
                                        </div>
                                        <div class="post-content-text pt-60">
                                            <div class="card">
                                                <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news4.jpg" alt="news4"></a>
                                                <div class="card-body">
                                                    <a href="#"><h5 class="card-title">একদিনের জন্য মুখ্যমন্ত্রী হলেন তরুণী!</h5></a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>১ বাবা, ২৭ মা, ১৫০ ভাই-বোন! </a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>মনিবের জন্য কুকুরের কাণ্ড!</a> </li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>এক মিনিটে ২৩০ বার স্কিপিংয়ে বিশ্ব রেকর্ড! (ভিডিও)</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>বিশ্বে ঘরে বসে খাবার অর্ডারে সবচেয়ে জনপ্রিয় পিৎজা</a>
                                                    </li>
                                                </ul>
                                                <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-five']; ?>)">
                                <h3 class="text-center"><?php echo $options['highlight-title-five']; ?></h3>
                            </div>
                            <div class="row bg3">
                                <div class="col-lg-6 text-post">
                                    <div class="card post-card bg3">
                                        <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news6.jpg" alt="news1"></a>
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">যুক্তরাজ্য থেকে সিলেটে আসা ২৮ প্রবাসী করোনায় আক্রান্ত!</h5></a>
                                        </div>
                                    </div>
                                    <div class="media pb-20">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news5.jpg" alt="news5"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="bg3-text mt-0">সব সময় মুক্তিযোদ্ধাদের সম্মান দিয়ে যাবো: ইমরান আহমদ</h5></a>
                                        </div>
                                    </div>
                                    <div class="media pb-20">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news5.jpg" alt="news5"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="bg3-text mt-0">সব সময় মুক্তিযোদ্ধাদের সম্মান দিয়ে যাবো: ইমরান আহমদ</h5></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 text-post">
                                    <div class="card post-card bg3">
                                        <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news7.jpg" alt="news1"></a>
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">যুক্তরাজ্য থেকে সিলেটে আসা ২৮ প্রবাসী করোনায় আক্রান্ত!</h5></a>
                                        </div>
                                    </div>
                                    <div class="media pb-20">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news5.jpg" alt="news5"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="bg3-text mt-0">সব সময় মুক্তিযোদ্ধাদের সম্মান দিয়ে যাবো: ইমরান আহমদ</h5></a>
                                        </div>
                                    </div>
                                    <div class="media pb-20">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news5.jpg" alt="news5"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="bg3-text mt-0">সব সময় মুক্তিযোদ্ধাদের সম্মান দিয়ে যাবো: ইমরান আহমদ</h5></a>
                                        </div>
                                    </div>
                                    <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="row pt-40 pb-40">
                                <div class="col-lg-4">
                                    <div class="title-news-row">
                                        <a href="#"><h4>জীবন ধারা</h4></a>
                                    </div>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news8.jpg" alt="news8"></a>
                                            <div class="card-body">
                                                <a href="#"><h5 class="card-title">'শূককীট' খাবারের জন্য নিরাপদ!</h5></a>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>উচ্চ রক্তচাপ নিয়ন্ত্রণে পাথরকুচি পাতা</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতকালে নলেন গুড়ের পাঁচটি রসালো খাবার</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>আমলকির যত গুণ</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>গ্রামীণ সম্প্রদায়ের সফল উদ্যোক্তা মরিয়ম বেগম</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতে ওজন বাড়ে কেন?</a></li>
                                            </ul>
                                            <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="title-news-row">
                                        <a href="#"><h4>পাঠক কলাম</h4></a>
                                    </div>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news8.jpg" alt="news8"></a>
                                            <div class="card-body">
                                                <a href="#"><h5 class="card-title">'শূককীট' খাবারের জন্য নিরাপদ!</h5></a>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>উচ্চ রক্তচাপ নিয়ন্ত্রণে পাথরকুচি পাতা</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতকালে নলেন গুড়ের পাঁচটি রসালো খাবার</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>আমলকির যত গুণ</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>গ্রামীণ সম্প্রদায়ের সফল উদ্যোক্তা মরিয়ম বেগম</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতে ওজন বাড়ে কেন?</a></li>
                                            </ul>
                                            <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="title-news-row">
                                        <a href="#"><h4>ওপার বাংলা</h4></a>
                                    </div>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news8.jpg" alt="news8"></a>
                                            <div class="card-body">
                                                <a href="#"><h5 class="card-title">'শূককীট' খাবারের জন্য নিরাপদ!</h5></a>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>উচ্চ রক্তচাপ নিয়ন্ত্রণে পাথরকুচি পাতা</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতকালে নলেন গুড়ের পাঁচটি রসালো খাবার</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>আমলকির যত গুণ</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>গ্রামীণ সম্প্রদায়ের সফল উদ্যোক্তা মরিয়ম বেগম</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতে ওজন বাড়ে কেন?</a></li>
                                            </ul>
                                            <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-six']; ?>)">
                                <h3 class="text-center"><?php echo $options['highlight-title-six']; ?></h3>
                            </div>
                            <div class="row p-bg">
                                <div class="col-lg-8">
                                    <div class="card post-card p-bg">
                                        <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news1.jpg" alt="news1"></a>
                                        <div class="card-body">
                                            <a href="#"><h5 class="card-title">কাতারে কিউএফসি’র প্রধান নির্বাহীর সঙ্গে রাষ্ট্রদূতের বৈঠক</h5></a>
                                            <a href="#"><p class="card-text">রাষ্ট্রদূত মো. জসীম উদ্দিন গতকাল কাতার ফাইন্যান্সিয়াল সেন্টারের (কিউএফসি) প্রধান নির্বাহী ইউসুফ আল জাইদার সাথে বৈঠক করেন। এসময় কিউএফসির…</p></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 media-card-text">
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <div class="media media-card">
                                        <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news2.jpg" alt="news2"></a>
                                        <div class="media-body">
                                            <a href="#"><h5 class="p-text mt-0">সিঙ্গাপুরে বাংলাদেশিকে নির্যাতনের মামলায় সাবেক অভিনেতা দোসাব্যস্ত</h5></a>
                                        </div>
                                    </div>
                                    <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">

                            <div class="row pt-20 pb-20">
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <div class="post-content-title">
                                            <a href="#"><h4>ফিচার</h4></a>
                                        </div>
                                        <div class="post-content-text pt-60">
                                            <div class="card">
                                                <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/11.jpg" alt="news3"></a>
                                                <div class="card-body">
                                                    <a href="#"><h5 class="card-title">পাকিস্তানকে ছাড়িয়ে অস্ট্রেলিয়ার পরই বাংলাদেশ</h5></a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>বাংলাওয়াশ উইন্ডিজ</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>কোচ ল্যাম্পার্ডকে বরখাস্ত করলো চেলসি</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>মুস্তাফিজের পর ক্যারিবীয় দূর্গে মিরাজের আঘাত</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>দেশের মাটিতে মাইলফলক সাকিবের </a></li>
                                                </ul>
                                                <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <div class="post-content-title">
                                            <a href="#"><h4>টেক ওয়ার্ল্ড</h4></a>
                                        </div>
                                        <div class="post-content-text pt-60">
                                            <div class="card">
                                                <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/11.jpg" alt="news4"></a>
                                                <div class="card-body">
                                                    <a href="#"><h5 class="card-title">একদিনের জন্য মুখ্যমন্ত্রী হলেন তরুণী!</h5></a>
                                                </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>১ বাবা, ২৭ মা, ১৫০ ভাই-বোন! </a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>মনিবের জন্য কুকুরের কাণ্ড!</a> </li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>এক মিনিটে ২৩০ বার স্কিপিংয়ে বিশ্ব রেকর্ড! (ভিডিও)</a></li>
                                                    <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>বিশ্বে ঘরে বসে খাবার অর্ডারে সবচেয়ে জনপ্রিয় পিৎজা</a>
                                                    </li>
                                                </ul>
                                                <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="row pt-40 pb-40">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="title-news-row">
                                        <a href="#"><h4>জীবন ধারা</h4></a>
                                    </div>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news8.jpg" alt="news8"></a>
                                            <div class="card-body">
                                                <a href="#"><h5 class="card-title">'শূককীট' খাবারের জন্য নিরাপদ!</h5></a>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>উচ্চ রক্তচাপ নিয়ন্ত্রণে পাথরকুচি পাতা</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতকালে নলেন গুড়ের পাঁচটি রসালো খাবার</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>আমলকির যত গুণ</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>গ্রামীণ সম্প্রদায়ের সফল উদ্যোক্তা মরিয়ম বেগম</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতে ওজন বাড়ে কেন?</a></li>
                                            </ul>
                                            <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="title-news-row">
                                        <a href="#"><h4>পাঠক কলাম</h4></a>
                                    </div>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news8.jpg" alt="news8"></a>
                                            <div class="card-body">
                                                <a href="#"><h5 class="card-title">'শূককীট' খাবারের জন্য নিরাপদ!</h5></a>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>উচ্চ রক্তচাপ নিয়ন্ত্রণে পাথরকুচি পাতা</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতকালে নলেন গুড়ের পাঁচটি রসালো খাবার</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>আমলকির যত গুণ</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>গ্রামীণ সম্প্রদায়ের সফল উদ্যোক্তা মরিয়ম বেগম</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতে ওজন বাড়ে কেন?</a></li>
                                            </ul>
                                            <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <div class="title-news-row">
                                        <a href="#"><h4>ওপার বাংলা</h4></a>
                                    </div>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <a href="#"><img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/page/news8.jpg" alt="news8"></a>
                                            <div class="card-body">
                                                <a href="#"><h5 class="card-title">'শূককীট' খাবারের জন্য নিরাপদ!</h5></a>
                                            </div>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>উচ্চ রক্তচাপ নিয়ন্ত্রণে পাথরকুচি পাতা</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতকালে নলেন গুড়ের পাঁচটি রসালো খাবার</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>আমলকির যত গুণ</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>গ্রামীণ সম্প্রদায়ের সফল উদ্যোক্তা মরিয়ম বেগম</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-circle"></i>শীতে ওজন বাড়ে কেন?</a></li>
                                            </ul>
                                            <a href="#" class="text-right l-link pt-20">আরও খবর<i class="fas fa-long-arrow-alt-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">
                            
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/add-930-90.jpg" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="block-container">

                            <div class="row pt-40 pb-20">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="gallery-slider-row text-right">
                                        <a href="#"><h4>ফটো অ্যালবাম</h4></a>
                                    </div>
                                    <div class="slider_wrap pt-60">
                                        <div class="banner_slider">
                                            <div class="banner_slider_content">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider1.jpg" alt="slider" class="img-fluid"></a>
                                                <a href="#"><h2>পাহাড়তলী ঝাউতলা এলাকায় আওয়ামী লীগের বিদ্রোহী প্রার্থী সমর্থকদের সড়ক অবরোধ</h2></a>
                                            </div>
                                            <div class="banner_slider_content">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider2.jpg" alt="slider" class="img-fluid"></a>
                                                <a href="#"><h2>পাহাড়তলী ঝাউতলা এলাকায় আওয়ামী লীগের বিদ্রোহী প্রার্থী সমর্থকদের সড়ক অবরোধ</h2></a>
                                            </div>
                                            <div class="banner_slider_content">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider1.jpg" alt="slider" class="img-fluid"></a>
                                                <a href="#"><h2>পাহাড়তলী ঝাউতলা এলাকায় আওয়ামী লীগের বিদ্রোহী প্রার্থী সমর্থকদের সড়ক অবরোধ</h2></a>
                                            </div>
                                            <div class="banner_slider_content">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider2.jpg" alt="slider" class="img-fluid"></a>
                                                <a href="#"><h2>পাহাড়তলী ঝাউতলা এলাকায় আওয়ামী লীগের বিদ্রোহী প্রার্থী সমর্থকদের সড়ক অবরোধ</h2></a>
                                            </div>
                                            <div class="banner_slider_content">
                                                <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider1.jpg" alt="slider" class="img-fluid"></a>
                                                <a href="#"><h2>পাহাড়তলী ঝাউতলা এলাকায় আওয়ামী লীগের বিদ্রোহী প্রার্থী সমর্থকদের সড়ক অবরোধ</h2></a>
                                            </div>
                                        </div>
                                        <div class="thumbnail_slider_area">
                                            <div class="container">
                                                <div class="row thumbnail_slider">
                                                    <div class="col gallery-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider1.jpg" alt="slider" class="img-fluid">
                                                    </div>
                                                    <div class="col gallery-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider2.jpg" alt="slider" class="img-fluid">
                                                    </div>
                                                    <div class="col gallery-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider1.jpg" alt="slider" class="img-fluid">
                                                    </div>
                                                    <div class="col gallery-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider2.jpg" alt="slider" class="img-fluid">
                                                    </div>
                                                    <div class="col gallery-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider1.jpg" alt="slider" class="img-fluid">
                                                    </div>
                                                    <div class="col gallery-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/slider/slider2.jpg" alt="slider" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Of col-lg-8 col-md-12 col-sm-12 -->

                    <div class="col-lg-4 col-sm-12 col-md-12">

                        <div class="widget-container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-title">
                                        <h4>বিজ্ঞাপন</h4>
                                    </div>
                                    <div class="widget-ads-area mt-40">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/ads1.gif" alt="ads" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-container">
                            <div class="row pt-30 pb-20">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-title">
                                        <h4>ফেসবুক কর্নার</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row widget-bg">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="facebook-corner-text">
                                        <div class="card widget-bg">
                                            <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget1.jpg" alt="Card image cap"></a>
                                            <div class="card-body">
                                                <a href="#"><p>বিএনপির এমপি রুমিন ফারহানার নামে প্রচার করা ছবিটি ডা. শামীমার</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="facebook-corner-text">
                                        <div class="card widget-bg">
                                            <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget2.jpg" alt="Card image cap"></a>
                                            <div class="card-body">
                                                <a href="#"><p>‘হতাশাগ্রস্ত গ্র্যাজুয়েট নয়, কর্মক্ষম ও স্বনির্ভর মানুষ তৈরি করুন’</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="facebook-corner-text">
                                        <div class="card widget-bg">
                                            <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget1.jpg" alt="Card image cap"></a>
                                            <div class="card-body">
                                                <a href="#"><p>‘হতাশাগ্রস্ত গ্র্যাজুয়েট নয়, কর্মক্ষম ও স্বনির্ভর মানুষ তৈরি করুন’</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="facebook-corner-text">
                                        <div class="card widget-bg">
                                            <a href="#"><img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget2.jpg" alt="Card image cap"></a>
                                            <div class="card-body">
                                                <a href="#"><p>‘হতাশাগ্রস্ত গ্র্যাজুয়েট নয়, কর্মক্ষম ও স্বনির্ভর মানুষ তৈরি করুন’</p></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-container pt-30 pb-20">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-title">
                                        <h4>বিজ্ঞাপন</h4>
                                    </div>
                                    <div class="widget-ads-area mt-40">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/ads4.jpg" alt="ads" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-container pt-10 ">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-title">
                                        <h4>ফেসবুকে আমাদের দেখুন </h4>
                                    </div>
                                    <div class="widget-ads-area">
                                        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/fb.png" alt="ads" class="img-fluid"></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-container pt-30 ">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-ads-area">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe width="729" height="410" src="https://www.youtube.com/embed/fZTkFQ62ynA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-container">
                            <div class="row pt-30 pb-20">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-title">
                                        <h4>মুক্তমঞ্চ</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-2">
                                        <ul class="list-unstyled">
                                            <li class="media">
                                                <div class="media-title">
                                                    <a href="#"><h5>কেন ওরা পারে, আমরা পারি না</h5></a>
                                                </div>
                                                <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget3.jpg" alt="widget" ></a>
                                                <div class="media-body">
                                                    <a href="#"><p>যুক্তরাষ্ট্রের প্রেসিডেন্ট জো বাইডেনের প্রশাসনে বাংলাদেশি বংশো™ূ¢ত আমেরিকার নাগরিক জাইন সিদ্দিকীর…</p></a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-title">
                                                    <a href="#"><h5>কেন ওরা পারে, আমরা পারি না</h5></a>
                                                </div>
                                                <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget3.jpg" alt="widget" ></a>
                                                <div class="media-body">
                                                    <a href="#"><p>যুক্তরাষ্ট্রের প্রেসিডেন্ট জো বাইডেনের প্রশাসনে বাংলাদেশি বংশো™ূ¢ত আমেরিকার নাগরিক জাইন সিদ্দিকীর…</p></a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <div class="media-title">
                                                    <a href="#"><h5>কেন ওরা পারে, আমরা পারি না</h5></a>
                                                </div>
                                                <a href="#"><img class="mr-3 img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/widget/widget3.jpg" alt="widget" ></a>
                                                <div class="media-body">
                                                    <a href="#"><p>যুক্তরাষ্ট্রের প্রেসিডেন্ট জো বাইডেনের প্রশাসনে বাংলাদেশি বংশো™ূ¢ত আমেরিকার নাগরিক জাইন সিদ্দিকীর…</p></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-container">
                            <div class="row pt-30 pb-20">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-title">
                                        <h4>প্রিন্ট সর্বাধিক</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-10">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="widget-3">
                                        <div class="card">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                                <li class="list-group-item"><a href="#"><i class="fas fa-hand-point-right"></i>অলি-ইবরাহিমদের তৎপরতায় টেনশনে বিএনপি</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>


                </div>
            </div>
        </section>
        <!---- =============================
            main-content-area End
        ================================== ---->

<?php get_footer();