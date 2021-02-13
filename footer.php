<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agriview24
 */

$options = get_option( 'my_options_framework' );

?>

    <!---- ================================
        footer-ads-area  start
    ===================================== ---->
</main>
<?php if ($options['cqat-secon-ads10']): ?>
    
<div class="footer-ads-area">
    <div class="container">
        <div class="row pt-40 pb-40">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="footer-ads text-center">
                    <a href="<?php echo $options['ads-url-highlight10']; ?>"><img src="<?php echo $options['cqat-secon-ads10']; ?>" alt="footer-ads" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<!---- =============================
    footer-ads-area End
================================== ---->

<!---- ================================
     footer-area  start
 ===================================== ---->
<div class="footer-area">
    <div class="container">
        <div class="row footer-bg pt-60 pb-60">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="footer-logo-area text-center">
                    <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo $options['footer-logo']; ?>" alt="logo" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="footer-content-area text-center">
                   <?php echo $options['footer-text']; ?>
                    <ul>
                        <label>ই-মেইল :</label>
                        <li><a href="#"><?php echo $options['footer-email1']; ?> ,</a></li>
                        <li><a href="#"><?php echo $options['footer-email1']; ?></a></li>
                    </ul>
                </div>
                <div class="contact-info">
                    <span><p>Copyright &copy; 2016 – <?php echo date('Y'); ?> Agriview24.com</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!---- ================================
    footer-area  End
===================================== ---->
<!-- =========================
   scroll To Top
========================= -->
<a href="#" id="scrollToTop" class="hide"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/Logo/favicon.ico" alt="scrolltop" /></a>
<!---- =============================
      Script Section start
================================== ---->
<?php wp_footer(); ?>
</body>
</html>

