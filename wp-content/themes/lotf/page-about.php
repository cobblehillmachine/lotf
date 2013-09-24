<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<div class="banner-cont"><div class="banner"><?php the_post_thumbnail('full'); ?></div></div>
		<div id="about-cont" class="container white">
			<div class="mid-cont">
				<h1><?php the_title(); ?></h1>
				<div class="section"><?php the_content(); ?></div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>