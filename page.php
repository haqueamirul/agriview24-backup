<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agriview24
 */

get_header();
?>

<main id="primary" class="site-main">
	<section class="main-content-area">
	<div class="container">
		<div class="row pt-20 pb-20">
			<!-- start Of col-lg-8 col-md-12 col-sm-12 -->
			<div class="col-lg-8 col-md-12 col-sm-12">

				<div class="block-container">
					<div class="page-title">
						<ul class="page-title-nav">
							<li><a href="<?php echo esc_url( home_url() ); ?>">হোম</a></li>
							<li><?php the_title(); ?></li>
						</ul>
					</div>

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
	</section>
</main><!-- #main -->

<?php
get_footer();
