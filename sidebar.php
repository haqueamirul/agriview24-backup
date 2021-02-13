<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agriview24
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }

$options = get_option( 'my_options_framework' );
?>

<!-- <aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside> -->

<div class="col-lg-4 col-sm-12 col-md-12">

    <div class="widget-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="widget-title">
                    <h4>বিজ্ঞাপন</h4>
                </div>
                <?php if ($options['homepage-ads-sidebar1']): ?>
                
                <div class="widget-ads-area mt-40">
                    <a href="<h4><?php echo $options['homepage-ads-sidebar1-link']; ?>"><img src="<?php echo $options['homepage-ads-sidebar1']; ?>" alt="ads" class="img-fluid"></a>
                </div>
                <?php endif ?>
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

            <?php 
            $titilepost13=$options['cat-footer-ten']; 
            $category_post  = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'category__and'     => $titilepost13,
                // 'offset' => 1,
                
            ));
             
            while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                
             <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="facebook-corner-text">
                    <div class="card widget-bg">
                        <?php the_post_thumbnail('cover', array('class' => 'card-img-top') ); ?>
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><p><?php the_title(); ?></p></a>
                        </div>
                    </div>
                </div>
            </div>
           <?php endwhile; ?>
            
        </div>
    </div>

    <div class="widget-container pt-30 pb-20">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="widget-title">
                    <h4>বিজ্ঞাপন</h4>
                </div>
                <?php if ($options['homepage-ads-sidebar2']): ?>
                
                <div class="widget-ads-area mt-40">
                    <a href="<?php echo $options['homepage-ads-sidebar2-link']; ?>"><img src="<?php echo $options['homepage-ads-sidebar2']; ?>" alt="ads" class="img-fluid"></a>
                </div>
                <?php endif ?>
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
                    <a href="https://www.facebook.com/agriview24bd/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/fb.png" alt="ads" class="img-fluid"></a>
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
                <?php if ($options['homepage-ads-sidebar3']): ?>
                
                <div class="widget-ads-area mt-40">
                    <a href="<?php echo $options['homepage-ads-sidebar3-link']; ?>"><img src="<?php echo $options['homepage-ads-sidebar3']; ?>" alt="ads" class="img-fluid"></a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>

    <div class="widget-container pt-30 ">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="widget-ads-area">
                    <div class="embed-responsive embed-responsive-16by9">
                        
                        <iframe width="729" height="410"
                        src="<?php echo $options['homepage-ads-sidebar2-video']; ?>">
                        </iframe>

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
                <?php if ($options['homepage-ads-sidebar4']): ?>
                
                <div class="widget-ads-area mt-40">
                    <a href="<?php echo $options['homepage-ads-sidebar4-link']; ?>"><img src="<?php echo $options['homepage-ads-sidebar4']; ?>" alt="ads" class="img-fluid"></a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>

    <div class="widget-container">
        <div class="row pt-30 pb-20">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="widget-title">
                    <h4><?php echo $options['homepage-ads-title']; ?></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="widget-2">
                    <ul class="list-unstyled">

                        <?php 
                        $titilepost13=$options['cat-footer-ten']; 
                        $category_post  = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'category__and'     => $titilepost13,
                            // 'offset' => 1,
                            
                        ));
                         
                        while ( $category_post->have_posts() ) : $category_post->the_post(); ?>
                            
                         <li class="media">
                            <div class="media-title">
                                <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                            </div>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'mr-3 img-fluid') ); ?></a>
                            <div class="media-body">
                                <p><?php echo cExcerpt('12'); ?></p>
                            </div>
                        </li>
                       <?php endwhile; ?>
                    </ul>
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
                <?php if ($options['homepage-ads-sidebar5']): ?>
                
                <div class="widget-ads-area mt-40">
                    <a href="<?php echo $options['homepage-ads-sidebar5-link']; ?>"><img src="<?php echo $options['homepage-ads-sidebar5']; ?>" alt="ads" class="img-fluid"></a>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>
