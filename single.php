<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package agriview24
 */

get_header();
?>

<main>	

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

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'agriview24' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'agriview24' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

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
