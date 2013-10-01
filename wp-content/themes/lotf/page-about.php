<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="banner-cont"><div class="banner"><?php the_post_thumbnail('full'); ?></div></div>
		<div class="wrap container white">
			<div class="mid-cont">
				<div class="section">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>