<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

					<?php if ( have_posts() ) : ?>

						<header class="page-header">
							<h1 class="page-title">
								<?php
								/* translators: %s: search query. */
								printf( esc_html__( 'Search Results for: %s', 'agriview24' ), '<span>' . get_search_query() . '</span>' );
								?>
							</h1>
						</header><!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
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

