<div id="post-<?php the_ID(); ?>" class="container lotf-post">
	<div class="mid-cont">
		<div class="post-wrap">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('category-thumb'); ?></a>
			<div class="post-detail">
				<h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(); ?>
			</div>
		</div>


	</div>
</div>