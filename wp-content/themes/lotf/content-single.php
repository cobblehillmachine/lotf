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
				<div class="post-author">BY <?php $author = get_the_author(); echo $author; ?> </div>
				<div class="sep"></div> 
				<div class="post-cat">
					<?php foreach((get_the_category()) as $cat) {if (!($cat->cat_ID=='9')) echo '<a href="' . get_bloginfo('url') . '/category/' . $cat->category_nicename . '/">'. $cat->cat_name . '</a>' . ' '; } ?></div> 
				<div class="sep"></div>

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
				<a id="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" class="share-icon"></a>
				<a id="share-twitter" href="https://twitter.com/intent/tweet?source=webclient&original_referer=<?php the_permalink(); ?>&text=<?php the_title(); ?>&url=<?php the_permalink(); ?>" target="_blank" class="share-icon"></a>
				<a id="share-google" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" class="share-icon"></a>
			</div>
			 <?php if(has_tag( $tag, $post )) { ?> 
			<div id="related-cont">
				<h2>Related articles</h2>  
				<?php  
				    $orig_post = $post;  
				    global $post;  
				    $tags = wp_get_post_tags($post->ID);  

				    if ($tags) {  
				    $tag_ids = array();  
				    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;  
				    $args=array(  
				    'tag__in' => $tag_ids,  
				    'post__not_in' => array($post->ID),  
				    'posts_per_page'=>3, // Number of related posts to display.  
				    'caller_get_posts'=>1  
				    );  

				    $my_query = new wp_query( $args );  

				    while( $my_query->have_posts() ) {  
				    $my_query->the_post();  
				    ?>  

				    <a href="<? the_permalink()?>" class="relatedthumb">  
				        <?php the_post_thumbnail('thumbnail'); ?>
				        <div class="post-title"><?php the_title(); ?>&nbsp;&raquo;</div>  
				    </a>  

				    <? }  
				    }  
				    $post = $orig_post;  
				    wp_reset_query();  
				    ?>
			
			</div>
				<?php } ?>
		</article>
		<?php get_sidebar(); ?>
	</div>
</div>
