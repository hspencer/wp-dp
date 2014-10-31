<?php get_header(); ?>
<div class="row">
	
	<div class="col-sm-12">
		<section id="content" role="main">
			<header class="header">
				<h1 class="entry-title tag-title"><?php _e( 'Archivos de la Etiqueta: ', 'dp' ); ?><span class='color'><?php single_tag_title(); ?></span></h1>
			</header>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'entry-block' ); ?>
			<?php endwhile; endif; ?>
			<?php get_template_part( 'nav', 'below' ); ?>
		</section>
	</div>
</div>
<div class="col-sm-12 hidden-xs">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>