<?php get_header(); ?>
<div class="row">
	<div class="col-md-6"></div>
	<div class="col-md-6">
		<section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry' ); ?>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</section>

	</div>
</div>

<div class="row">
	<div class="col-md-4">
		<?php get_footer(); ?>
	</div>
	<div class="col-md-8">
		<?php get_sidebar(); ?>
	</div>
</div>


