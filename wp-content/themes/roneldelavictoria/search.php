<?php get_header(); ?>
<main>
	<div class="container page_container">
		<div class="row">
			<div class=" mt-5 mb-5 woocommerce-content-container page-content">
			<div><h1><?php the_title(); ?></h1></div>
				<?php while(have_posts()): the_post() ?>

					<?php the_content() ?>
			
				<?php endwhile; ?>
			</div>
		</div>
		
	</div>
</main>
<?php get_footer();?>