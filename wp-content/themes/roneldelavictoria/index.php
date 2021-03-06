<?php get_header(); ?>

<div class="site-main">

	<?php get_sidebar(); ?>

	<main id="primary" class="site-main">
		<div id="menu-detail" class="main-container">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();

		endwhile; // End of the loop.
		?>
		</div>

	</main><!-- #main -->

</div>

<?php
get_footer();
