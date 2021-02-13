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
                            <a href="<?php echo $options['ads-url-highlight']; ?>"><img src="<?php echo $options['highlight-below-ads']; ?>" alt="ads-main" class="img-fluid"></a>
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
                                            'posts_per_page' => 4,
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
        <?php if ($options['cqat-secon-ads']): ?>
            
        <div class="ads-main-area">
            <div class="container">
                <div class="row pb-20">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-ads text-center">
                            <a href="<?php echo $options['ads-url-highlight2']; ?>"><img src="<?php echo $options['cqat-secon-ads']; ?>" alt="ads-main" class="img-fluid"></a>
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
        <?php if ($options['cqat-secon-ads3']): ?>
        <div class="ads-main-area">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="main-ads text-center">
                            <a href="<?php echo $options['ads-url-highlight3']; ?>"><img src="<?php echo $options['cqat-secon-ads3']; ?>" alt="ads-main" class="img-fluid"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
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
                            <?php if ($options['titleSec1']): ?>
                            <div class="content-news-title text-right">
                                <h4><?php echo $options['titleSec1']; ?></h4>
                            </div>
                            <?php endif ?>
                            <div class="media-content l-img pt-60">

                                <?php 
                                $newsection=$options['cat-onesection']; 
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6,
                                    'category__and'     => $newsection,
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                
                                <div class="media">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid mr-3') ); ?></a>
                                    <div class="media-body">
                                        <a href="<?php the_permalink(); ?>"><p class="mt-0"><?php the_title(); ?></p></a>
                                    </div>
                                </div>                             
                                 
                                <?php endwhile;
                                 
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="content-news-center">
                            <?php if ($options['titleSec2']): ?>
                            
                            <div class="content-news-title text-right">
                                <h4><?php echo $options['titleSec2']; ?></h4>
                            </div>
                            <?php endif ?>
                            <div class="media-content pt-60">
                                <div class="card center-card">

                                     <?php 
                                        $newsectiontwow=$options['cat-onesection2']; 
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 1,
                                            'category__and'     => $newsectiontwow,
                                        ));
                                         
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                        <?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?>
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                            <p class="card-text"><?php echo cExcerpt(15); ?></p>
                                        </div> 
                        
                                         
                                        <?php endwhile;
                                         
                                        ?>

                                        <?php 
                                        $newsectiontwow=$options['cat-onesection2']; 
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 3,
                                            'category__and'     => $newsectiontwow,
                                            'offset' => 1,
                                        ));
                                         
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                        <a href="<?php the_permalink(); ?>"><h5 class="card-title" style="font-size: 16px;margin: 0px 0px 20px 0px;"><?php the_title(); ?></h5></a> 
                        
                                        <?php endwhile;
                                         
                                        ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="content-news-right">
                            <?php if ($options['titleSec2']): ?>
                            <div class="content-news-title text-right">
                                <a href=""><h4><?php echo $options['titleSec2']; ?></h4></a>
                            </div>
                            <?php endif ?>
                            <div class="media-content r-img pt-60">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $options['cat-onesectionimg']; ?>" alt="sce" class="img-fluid"></a>
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
                                <h3 class="text-center"><?php echo $options['titlesec-three']; ?></h3>
                            </div>
                            
                            <div class="row pt-10 pb-10 bg-row">
                                <?php 
                                $titilepost2=$options['cat-section-three']; 
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'category__and'     => $titilepost2,
                                    
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                <div class="col-lg-4 ">
                                    <div class="card i-text">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                            <p class="card-text"><?php echo cExcerpt('14'); ?></p>
                                        </div>
                                    </div>
                                </div> 
                
                                <?php endwhile;
                                 
                                ?>
                                
                                
                            </div>
                        </div>

                        <?php if ($options['cqat-secon-ads4']): ?>
                            
                        <div class="block-container">

                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="<?php echo $options['ads-url-highlight4']; ?>"><img src="<?php echo $options['cqat-secon-ads4']; ?>" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-four']; ?>)">
                                <h3 class="text-center"><?php echo $options['titlesec-four']; ?></h3>
                            </div>
                            <div class="row p-bg">

                                <?php 
                                $titilepost3=$options['cat-section-four']; 
                                $category_post  = new WP_Query(array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 1,
                                    'category__and'     => $titilepost3,
                                    
                                ));
                                 
                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                <div class="col-lg-8">
                                    <div class="card post-card p-bg">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid card-img-top') ); ?></a>
                                        <div class="card-body">
                                            <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                            <p class="card-text"><?php echo cExcerpt('20'); ?></p>
                                        </div>
                                    </div>
                                </div>
                
                                <?php endwhile;
                                 
                                ?>

                                <div class="col-lg-4 media-card-text">
                                    <?php 
                                    $titilepost3=$options['cat-section-four']; 
                                    $category_post  = new WP_Query(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 5,
                                        'category__and'     => $titilepost3,
                                        'offset' => 1,
                                        
                                    ));
                                     
                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                    <div class="media media-card">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid mr-3') ); ?></a>
                                        <div class="media-body">
                                            <a href="<?php the_permalink(); ?>"><h5 class="card-title" style="    font-size: 16px;color: #444;"><?php the_title(); ?></h5></a>
                                        </div>
                                    </div>
                    
                                    <?php endwhile;
                                     
                                    ?>

                                </div>
                            </div>
                        </div>

                        <?php if ($options['cqat-secon-ads5']): ?>
                            
                        <div class="block-container">
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="<?php echo $options['ads-url-highlight5']; ?>"><img src="<?php echo $options['cqat-secon-ads5']; ?>" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="block-container">

                            <div class="row pt-20 pb-20">
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <?php if ($options['titlesecnew']): ?>
                                        <div class="post-content-title">
                                            <h4><?php echo $options['titlesecnew']; ?></h4>
                                        </div>
                                        <?php endif ?>
                                        <div class="post-content-text pt-60">
                                            <div class="card">
                                                <?php 
                                                $titilepost4=$options['catsect-catleft']; 
                                                $category_post  = new WP_Query(array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 1,
                                                    'category__and'     => $titilepost4,
                                                    // 'offset' => 1,
                                                    
                                                ));
                                                 
                                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?></a>
                                                <div class="card-body">
                                                    <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                                </div>
                                
                                                <?php endwhile;
                                                 
                                                ?>
                                                

                                                <ul class="list-group list-group-flush">
                                                    <?php 
                                                    $titilepost4=$options['catsect-catleft']; 
                                                    $category_post  = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 4,
                                                        'category__and'     => $titilepost4,
                                                        'offset' => 1,
                                                        
                                                    ));
                                                     
                                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                                    <li class="list-group-item"><a href="<?php the_permalink(); ?>"><i class="fas fa-circle"></i><?php the_title(); ?></a></li>
                                    
                                                    <?php endwhile;
                                                     
                                                    ?>

                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-content">
                                       <?php if ($options['titlesecnew1']): ?>
                                        <div class="post-content-title">
                                            <h4><?php echo $options['titlesecnew1']; ?></h4>
                                        </div>
                                        <?php endif ?>
                                        <div class="post-content-text pt-60">
                                            <div class="card">
                                                <?php 
                                                $titilepost5=$options['catsect-catright']; 
                                                $category_post  = new WP_Query(array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 1,
                                                    'category__and'     => $titilepost5,
                                                    // 'offset' => 1,
                                                    
                                                ));
                                                 
                                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?></a>
                                                <div class="card-body">
                                                    <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                                </div>
                                
                                                <?php endwhile;
                                                 
                                                ?>
                                                

                                                <ul class="list-group list-group-flush">
                                                    <?php 
                                                    $titilepost6=$options['catsect-catright']; 
                                                    $category_post  = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 4,
                                                        'category__and'     => $titilepost6,
                                                        'offset' => 1,
                                                        
                                                    ));
                                                     
                                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                                    <li class="list-group-item"><a href="<?php the_permalink(); ?>"><i class="fas fa-circle"></i><?php the_title(); ?></a></li>
                                    
                                                    <?php endwhile;
                                                     
                                                    ?>

                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($options['cqat-secon-ads6']): ?>
                        <div class="block-container">
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="<?php echo $options['ads-url-highlight6']; ?>"><img src="<?php echo $options['cqat-secon-ads6']; ?>" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-five']; ?>)">
                                <h3 class="text-center"><?php echo $options['titlesec-five']; ?></h3>
                            </div>
                            <div class="row bg3">
                                <?php 
                                    $titilepost7=$options['cat-section-five']; 
                                    $category_post  = new WP_Query(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 2,
                                        'category__and'     => $titilepost7,
                                        // 'offset' => 1,
                                        
                                    ));
                                     
                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                    <div class="col-lg-6 text-post">
                                        <div class="card post-card bg3">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?></a>
                                            <div class="card-body">
                                                 <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                     
                                ?>
                            </div>
                            <div class="row bg3">
                                <?php 
                                    $titilepost7=$options['cat-section-five']; 
                                    $category_post  = new WP_Query(array(
                                        'post_type' => 'post',
                                        'posts_per_page' => 4,
                                        'category__and'     => $titilepost7,
                                        'offset' => 2,
                                        
                                    ));
                                     
                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                     <div class="col-lg-6 text-post">
                                        <div class="media pb-20">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'mr-3 img-fluid') ); ?></a>
                                            
                                            <div class="media-body">
                                                <a href="<?php the_permalink(); ?>"><h5 class="bg3-text mt-0"><?php the_title(); ?></h5></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile;
                                     
                                ?>
                               


                            </div>
                        </div>

                        <?php if ($options['cqat-secon-ads7']): ?>
                        <div class="block-container">
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="<?php echo $options['ads-url-highlight7']; ?>"><img src="<?php echo $options['cqat-secon-ads7']; ?>" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="block-container">
                            <div class="row pt-40 pb-40">
                                <div class="col-lg-4">
                                    <?php if ($options['titleany1']): ?>
                                    <div class="title-news-row">
                                        <h4><?php echo $options['titleany1']; ?></h4>
                                    </div>
                                    <?php endif ?>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <?php 
                                                $titilepost8=$options['catsectionany1']; 
                                                $category_post  = new WP_Query(array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 1,
                                                    'category__and'     => $titilepost8,
                                                    // 'offset' => 2,
                                                    
                                                ));
                                                 
                                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?></a>
                                                    <div class="card-body">
                                                        <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                                    </div>
                                                <?php endwhile;
                                                 
                                            ?>
                                            

                                            <ul class="list-group list-group-flush">
                                                <?php 
                                                    $titilepost8=$options['catsectionany1']; 
                                                    $category_post  = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 5,
                                                        'category__and'     => $titilepost8,
                                                        'offset' => 1,
                                                        
                                                    ));
                                                     
                                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                     <li class="list-group-item"><a href="<?php the_permalink(); ?>"><i class="fas fa-circle"></i><?php the_title(); ?></a></li>
                                                    <?php endwhile;
                                                     
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <?php if ($options['titleany2']): ?>
                                    <div class="title-news-row">
                                        <h4><?php echo $options['titleany2']; ?></h4>
                                    </div>
                                    <?php endif ?>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <?php 
                                                $titilepost9=$options['catsectionany2']; 
                                                $category_post  = new WP_Query(array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 1,
                                                    'category__and'     => $titilepost9,
                                                    // 'offset' => 2,
                                                    
                                                ));
                                                 
                                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?></a>
                                                    <div class="card-body">
                                                        <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                                    </div>
                                                <?php endwhile;
                                                 
                                            ?>
                                            

                                            <ul class="list-group list-group-flush">
                                                <?php 
                                                    $titilepost9=$options['catsectionany2']; 
                                                    $category_post  = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 5,
                                                        'category__and'     => $titilepost9,
                                                        'offset' => 1,
                                                        
                                                    ));
                                                     
                                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                     <li class="list-group-item"><a href="<?php the_permalink(); ?>"><i class="fas fa-circle"></i><?php the_title(); ?></a></li>
                                                    <?php endwhile;
                                                     
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <?php if ($options['titleany3']): ?>
                                    <div class="title-news-row">
                                        <h4><?php echo $options['titleany3']; ?></h4>
                                    </div>
                                    <?php endif ?>
                                    <div class="news-row pt-60">
                                        <div class="card">
                                            <?php 
                                                $titilepost10=$options['catsectionany3']; 
                                                $category_post  = new WP_Query(array(
                                                    'post_type' => 'post',
                                                    'posts_per_page' => 1,
                                                    'category__and'     => $titilepost10,
                                                    // 'offset' => 2,
                                                    
                                                ));
                                                 
                                                while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?></a>
                                                    <div class="card-body">
                                                        <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                                    </div>
                                                <?php endwhile;
                                                 
                                            ?>
                                            

                                            <ul class="list-group list-group-flush">
                                                <?php 
                                                    $titilepost10=$options['catsectionany3']; 
                                                    $category_post  = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 5,
                                                        'category__and'     => $titilepost10,
                                                        'offset' => 1,
                                                        
                                                    ));
                                                     
                                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                     <li class="list-group-item"><a href="<?php the_permalink(); ?>"><i class="fas fa-circle"></i><?php the_title(); ?></a></li>
                                                    <?php endwhile;
                                                     
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php if ($options['cqat-secon-ads8']): ?>

                        <div class="block-container"> 
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="<?php echo $options['ads-url-highlight8']; ?>"><img src="<?php echo $options['cqat-secon-ads8']; ?>" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="block-container">
                            <div class="title-area" style="background: url(<?php echo $options['highlight-bg-six']; ?>)">
                                <h3 class="text-center"><?php echo $options['titlesec-six']; ?></h3>
                            </div>
                            <div class="row p-bg">
                                <div class="col-lg-8">
                                    <?php 
                                        $titilepost11=$options['cat-section-six']; 
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 1,
                                            'category__and'     => $titilepost11,
                                            // 'offset' => 1,
                                            
                                        ));
                                         
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>

                                         <div class="card post-card p-bg">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?></a>
                                            <div class="card-body">
                                                <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                                                <p class="card-text"><?php echo cExcerpt('20'); ?></p>
                                            </div>
                                        </div>
                                     <?php endwhile; ?>
                                    
                                </div>
                                <div class="col-lg-4 media-card-text">
                                    <?php 
                                        $titilepost11=$options['cat-section-six']; 
                                        $category_post  = new WP_Query(array(
                                            'post_type' => 'post',
                                            'posts_per_page' => 5,
                                            'category__and'     => $titilepost11,
                                            'offset' => 1,
                                            
                                        ));
                                         
                                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                            
                                         <div class="media media-card">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'mr-3 img-fluid') ); ?></a>
                                            <div class="media-body">
                                                <a href="<?php the_permalink(); ?>"><h5 class="p-text mt-0"><?php the_title(); ?></h5></a>
                                            </div>
                                        </div>
                                       <?php endwhile; ?>
                                    
                                </div>
                            </div>
                        </div>

                        <?php if ($options['cqat-secon-ads9']): ?>
                        <div class="block-container">
                            <div class="ads-main-area">
                                <div class="container">
                                    <div class="row pt-20 pb-20">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="main-ads text-center">
                                                <a href="<?php echo $options['ads-url-highlight9']; ?>"><img src="<?php echo $options['cqat-secon-ads9']; ?>" alt="ads-main" class="img-fluid"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif ?>

                        <div class="block-container">

                            <div class="row pt-40 pb-20">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="gallery-slider-row text-right">
                                        <a href="#"><h4><?php echo $options['title-ten-slider']; ?></h4></a>
                                    </div>
                                    <div class="slider_wrap pt-60">
                                        <div class="banner_slider">

                                            <?php 
                                            $titilepost13=$options['cat-footer-ten']; 
                                            $category_post  = new WP_Query(array(
                                                'post_type' => 'post',
                                                'posts_per_page' => -1,
                                                'category__and'     => $titilepost13,
                                                // 'offset' => 1,
                                                
                                            ));
                                             
                                            while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                
                                             <div class="banner_slider_content">
                                                 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-hobe img-fluid') ); ?></a>
                                                <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                                            </div>
                                           <?php endwhile; ?>

                                            
                                        </div>
                                        <div class="thumbnail_slider_area">
                                            <div class="container">
                                                <div class="row thumbnail_slider">
                                                    <?php 
                                                    $titilepost13=$options['cat-footer-ten']; 
                                                    $category_post  = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => -1,
                                                        'category__and'     => $titilepost13,
                                                        // 'offset' => 1,
                                                        
                                                    ));
                                                     
                                                    while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                                                        
                                                     <div class="col gallery-img">
                                                        <?php the_post_thumbnail('cover', array('class' => 'img-fluid') ); ?>
                                                    </div>
                                                   <?php endwhile; ?>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Of col-lg-8 col-md-12 col-sm-12 -->

                    <?php get_sidebar(); ?>
                </div>
            </div>
        </section>
        <!---- =============================
            main-content-area End
        ================================== ---->

<?php get_footer();