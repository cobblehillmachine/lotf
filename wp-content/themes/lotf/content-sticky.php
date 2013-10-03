<div class="sticky-cont">
	<div class="image"><?php the_post_thumbnail('thumbnail'); ?></div>
	<div class="info-sticky">
		<div class="sticky-cat"><?php foreach((get_the_category()) as $category) {echo $category->cat_name;} ?></div>
		<div class="post-title"><?php the_title(); ?></div>
		<div class="excerpt"><?php the_excerpt(); ?></div>
	</div>
</div>