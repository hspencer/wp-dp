<?php get_header(); ?>
<div class="row">
	<div class="col-md-6">
		<?php dynamic_sidebar( 'Alter' ); ?>
		<?php get_sidebar(); ?>
	</div>
	<div class="col-md-6">
		<section id="content" role="main" class='row'>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-small' ); ?>
			<?php comments_template(); ?>
		<?php endwhile; endif; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
	</section>
	</div>
</div>
<?php get_footer(); ?>



