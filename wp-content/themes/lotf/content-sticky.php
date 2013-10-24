<div class="sticky-cont">
	<a class="image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
	<div class="info-sticky">
		<a class="sticky-cat" href="/category/<?php foreach((get_the_category()) as $category) {echo strtolower(str_replace(' ','-',$category->cat_name));} ?>">
			<?php foreach((get_the_category()) as $category) {echo $category->cat_name;} ?>
		</a>
		<a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<div class="excerpt"><?php the_excerpt(); ?></div>
	</div>
</div>