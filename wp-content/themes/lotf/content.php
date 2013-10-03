<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	
	<div id="sticky-post">
		<div class="banner-cont">
			<div class="banner">
				<?php the_post_thumbnail('full'); ?>
				<div class="info-cont">
					<div class="category"><?php foreach((get_the_category()) as $category) {echo $category->cat_name;} ?></div>
					<div class="cat-link"><a class="title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?>&nbsp;&raquo;</a></div>					
				</div>
				
			</div>
		</div>
	</div>


