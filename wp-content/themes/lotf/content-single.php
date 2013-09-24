<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<div class="banner-cont"><div class="banner"><?php the_post_thumbnail('full'); ?></div></div>
<div class="container white">
	<div class="mid-cont">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<div class="post-info container">
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'twentyeleven' ) );

					/* translators: used between list items, there is a space after the comma */
					$tag_list = get_the_tag_list( '', __( ', ', 'twentyeleven' ) );
					if ( '' != $tag_list ) {
						$utility_text = __( 'This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
					} elseif ( '' != $categories_list ) {
						$utility_text = __( '<div class="post-author">BY %5$s</div> <div class="sep"></div> <div class="post-cat">%1$s</div> <div class="sep"></div> ', 'twentyeleven' );
					} else {
						$utility_text = __( 'This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'twentyeleven' );
					}

					printf(
						$utility_text,
						$categories_list,
						$tag_list,
						esc_url( get_permalink() ),
						the_title_attribute( 'echo=0' ),
						get_the_author(),
						esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) )
					);
				?>
				<?php if ( 'post' == get_post_type() ) : ?>
				<div class="post-date">
					<?php twentyeleven_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</div>
			<div class="entry-content container">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div>
			<div id="share-cont" class="container">
				<span>share this article</span><div class="sep"></div>
				<a id="share-facebook" href="#" target="_blank" class="share-icon"></a>
				<a id="share-twitter" href="#" target="_blank" class="share-icon"></a>
				<a id="share-google" href="#" target="_blank" class="share-icon"></a>
			</div>
			<div id="related-cont"></div>
		</article>
		<?php get_sidebar(); ?>
	</div>
</div>
