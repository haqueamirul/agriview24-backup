<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agriview24
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="publisttime pt-20 pb-20 mb-3">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="date-area">
						<span>প্রকাশ : <?php the_time('F j, Y g:i a'); ?></span>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="share-area">
						<ul>
							<li>
								<p class="fa-bg"><?php the_tags(); ?> <span>views: <?php echo sunset_save_post_views(get_the_id() ); ?></span></p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="main-post-content">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="card">
						<?php
						if ( is_singular() ) :
							the_title( '<h5 class="card-title">', '</h5>' );
						else :
							the_title( '<h5 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
						endif;

						 ?>
						
						 <span class="tag-line">
						 	<?php 
						 		$categories = get_the_category();
								if ( ! empty( $categories ) ) {
								    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
								}
						 	 ?>
						 </span>
						 
					

					<?php agriview24_post_thumbnail(); ?>

					<div class="card-body">
						<p class="card-text">
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'agriview24' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post( get_the_title() )
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'agriview24' ),
								'after'  => '</div>',
							)
						);
						?>
					</p>

					</div><!-- .entry-content -->
					</div>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->

	
</article><!-- #post-<?php the_ID(); ?> -->
