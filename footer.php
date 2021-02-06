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

?>

    <!---- ================================
        footer-ads-area  start
    ===================================== ---->
</main>
<div class="footer-ads-area">
    <div class="container">
        <div class="row pt-40 pb-40">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="footer-ads text-center">
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/ads/pradhikar-final.gif" alt="footer-ads" class="img-fluid"></a>
                </div>
            </div>
        </div>
    </div>
</div>
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
                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/frontend/images/Logo/logo.png" alt="logo" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="footer-content-area text-center">
                    <p> স্বত্ব ©এগ্রিভিউ টোয়েন্টিফোর.কম (২0১৬ - ২0২০)<br>
                        <b>সম্পাদকঃ ড. আবুল খায়ের,</b>  <b>প্রকাশকঃ ডাঃ মনজুর কাদের চৌধুরী</b><br>
                        এই ওয়েবসাইটের কোন লেখা বা ছবি অনুমতি ছাড়া নকল করা বা অন্য কোথাও প্রকাশ করা বেআইনি |</p>
                    <ul>
                        <label>ই-মেইল :</label>
                        <li><a href="#">info@gmail.com ,</a></li>
                        <li><a href="#">agriview24@gmail.com</a></li>
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

