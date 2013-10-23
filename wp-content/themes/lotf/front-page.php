<?php get_header(); ?>
<div id="home-slider" class="container">
		
		<div class="banner-cont">
			<?php $count = 0; ?>
			<?php global $post; $myposts = get_posts('numberposts=4&category=9');
			 foreach($myposts as $post) { ?>
				<a id="slide<?php echo $count;?>" class="banner" href="<?php the_permalink(); ?>" slide="<?php echo $count;?>">
					<?php the_post_thumbnail('full'); ?>
					<div class="info-cont">
						<div class="category">featured</div>
						<div class="cat-link"><div class="title-link"><?php the_title(); ?>&nbsp;&raquo;</div></div>

					</div>
				</a>
				<?php $count++; ?>
			<?php } wp_reset_query(); ?>
			
		</div>
		<div class="mid-cont">
				<div id="thumb-cont" class="container">
					<?php $i = 0; ?>
					<?php global $post; $myposts = get_posts('numberposts=4&category=9');
					 foreach($myposts as $post) { ?>
						<div class="slide-thumb slide<?php echo $i;?>" thumb="<?php echo $i;?>">
							<div class="overlay"></div>
							<div class="title"><div class="cell"><span><?php the_title(); ?></span></div></div>
							<?php the_post_thumbnail('category-thumb'); ?>
						</div>
						<?php $i++; ?>
					<?php } ?>
				</div>
			
		</div>
	
</div>
<div class="container white">
	<div class="mid-cont">
		<div class="section">
			
				<?php query_posts( array( 'post__in' => $sticky ) ); ?>	
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if(is_sticky()) { ?>
						<?php get_template_part( 'content-sticky', get_post_format() ); ?>
					<?php } ?>
				<?php endwhile; wp_reset_query(); ?>
			
		</div>
		<?php get_sidebar(); ?>
	</div>	
</div>
<div id="instagram-cont" class="container">
	<div class="line"></div>
	<div class="mid-cont">
		<div class="feed-title">@ LOTF on INSTAGRAM</div>
		<div id="instafeed"></div>
	</div>
</div>
<?php get_footer(); ?>

<script type="text/javascript">

		   var userFeed = new Instafeed({
		        get: 'user',
		        userId: 220440851,
		        accessToken: '220440851.6a21cfe.f563f019756a45d88db13e623c930efd',
				resolution: 'low_resolution',
				limit: 4
		    });
		    userFeed.run();
 
</script>