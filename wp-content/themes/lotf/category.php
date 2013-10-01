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

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>
				
				<?php	if ($total_pages > 1){  ?>
					<div id="pagination">
						<?php  $current_page = max(1, get_query_var('paged'));  

						  echo parent_paginate_links(array(  
						      'base' => get_pagenum_link(1) . '%_%',  
						      'format' => '/page/%#%',  
						      'current' => $current_page,  
						      'total' => $total_pages,  
						 ));  ?>
					</div>
				<?php	} ?>

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
