<?php get_header(); ?>
<div class="row">
	<div class="col-sm-6 hidden-xs">
		<?php dynamic_sidebar( 'wide' ); ?>
		<?php dynamic_sidebar( 'clean' ); ?>
		<?php get_sidebar(); ?>
	</div>

	<div class="col-sm-6">
		<section id="content" role="main" class='row'>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			if( get_post_type() == 'wide' ) {
				get_template_part( 'entry-block' );
			} else {
				get_template_part( 'entry-small' );
			}
			
			comments_template();
			endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</section>
	</div>
</div>
<?php get_footer(); ?>



