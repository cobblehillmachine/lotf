<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(is_sticky()) { ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php } ?>
				<?php endwhile; wp_reset_query(); ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(!is_sticky()) { ?>
				<?php get_template_part( 'content-category', get_post_format() ); ?>
					<?php } ?>
				<?php endwhile; ?>
				<?php global $wp_query;  $total_pages = $wp_query->max_num_pages;  ?>
				<?php	if ($total_pages > 1){  ?>
					<div id="pagination">
						<div class="mid-cont">
						<?php  $current_page = max(1, get_query_var('paged'));  

						  echo parent_paginate_links(array(  
						      'base' => get_pagenum_link(1) . '%_%',  
						      'format' => 'page/%#%',  
						      'current' => $current_page,  
						      'total' => $total_pages,  
						 ));  ?>
						</div>
					</div>
				<?php	} ?>
				<div class="mid-cont"><?php get_sidebar(); ?></div>
				<!-- <?php //twentyeleven_content_nav( 'nav-below' ); ?> -->

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>


<?php get_footer(); ?>
