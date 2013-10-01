<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<?php if ( is_sticky() ) { ?>
	<div id="sticky-post">
		<div class="banner-cont">
			<div class="banner">
				<?php the_post_thumbnail('full'); ?>
				<div class="info-cont">
					<div class="category"><?php foreach((get_the_category()) as $category) {echo $category->cat_name;} ?></div>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a>
						
				</div>
				
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div id="post-<?php the_ID(); ?>" class="container lotf-post">
		<div class="mid-cont">
			<div class="post-wrap">
				<?php the_post_thumbnail('category-thumb'); ?>
				<div class="post-detail">
					<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</div>
			</div>
	

		</div>
	</div>
	<?php } ?>