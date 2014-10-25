<?php get_header(); ?>
<div class="row">
	<div class="col-md-6">
		<div class="well"><?php get_sidebar(); ?></div>
	</div>
	<div class="col-md-6">
		<div class="well">
			<section id="content" role="main">
				<header class="header">
					<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'dp' ); ?><?php single_tag_title(); ?></h1>
				</header>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</section>

	</div>
</div>
</div>

<?php get_footer(); ?>