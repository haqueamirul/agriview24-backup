<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package agriview24 
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row pt-10 pb-10">
		<div class="col-lg-8 col-md-12 col-sm-12">
			<?php 

				$categories = get_the_category();
					if ( ! empty( $categories ) ) {
						foreach( $categories as $category ) {
					    // echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';

					    $catpage=$category->name;
					}
					   
					}

		          $heading = null;
		          $heading = new WP_Query(array(
		              'post_type' => 'page',
		              'post_status' => 'publish',
		              'posts_per_page' => 1,
		              'category_name' => $catpage,
		              'paged' => $paged,
		              'orderby' => 'date',
		              
		          ));
		          while ( $heading->have_posts() ) : $heading->the_post();

		          	if (wp_count_posts()->publish > 1 ) {
		          		
		          	
		          
		      ?>            
		        <div class="big-image-area">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'img-fluid img-new2') ); ?></a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
				</div>

		      <?php } endwhile; 
		          wp_reset_postdata(); 
		      ?>
			
		</div>
		<div class="col-lg-4 col-md-12 col-sm-12">
			<div class="big-content">
				<?php 

					$categories = get_the_category();
						if ( ! empty( $categories ) ) {
							foreach( $categories as $category ) {
						    // echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';

						    $catpage=$category->name;
						}
						   
						}

			          $heading = null;
			          $heading = new WP_Query(array(
			              'post_type' => 'page',
			              'post_status' => 'publish',
			              'posts_per_page' => 1,
			              'category_name' => $catpage,
			              'paged' => $paged,
			              'orderby' => 'date',
			              'offset' => 1
			          ));
			          while ( $heading->have_posts() ) : $heading->the_post();

			          	if (wp_count_posts()->publish > 1 ) {
			          		
			          	
			          
			      ?>            
			        <div class="card">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?></a>
						<div class="card-body">
						  <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
						  <p class="card-text"> <?php echo cExcerpt('35'); ?></p>
						</div>
					</div>

			      <?php } endwhile; 
			          wp_reset_postdata(); 
			      ?>
				
			</div>
		</div>
	</div>
	<div class="row">

		<?php 

		$categories = get_the_category();
			if ( ! empty( $categories ) ) {
				foreach( $categories as $category ) {
			    // echo $category->term_id . ', ' . $category->slug . ', ' . $category->name . '<br />';

			    $catpage=$category->name;
			}
			   
			}

          $heading = null;
          $heading = new WP_Query(array(
              'post_type' => 'page',
              'post_status' => 'publish',
              'posts_per_page' => 9,
              'category_name' => $catpage,
              'paged' => $paged,
              'orderby' => 'date',
              'offset' => 2
          ));
          while ( $heading->have_posts() ) : $heading->the_post();

          	if (wp_count_posts()->publish > 1 ) {
          		
          	global $page;
			echo $page->ID;
          
      ?>            
        <div class="col-lg-4 col-md-12 col-sm-12">
			<div class="big-content">
				<div class="card">
					<a href="<?php the_permalink(); ?>"></a><?php the_post_thumbnail('cover', array('class' => 'card-img-top img-fluid') ); ?>
					<div class="card-body">
					  <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?> </h5></a>
					  <p class="card-text"> <?php echo cExcerpt('15'); ?></p>
					</div>
				</div>
			</div>
		</div>

      <?php } endwhile; 
          wp_reset_postdata(); 
      ?> 

		<div class="more-link">
			<?php 
		 		$categories = get_the_category();
				if ( ! empty( $categories ) ) {
				    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '"><span>এই বিভাগের আরও খবর<i class="fas fa-long-arrow-alt-right"></i></span></a>';
				}
		 	 ?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
