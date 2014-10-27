<?php get_header(); ?>

<header class="header">
<h1 class="entry-title"><?php _e( 'Category Archives: ', 'dp' ); ?><?php single_cat_title(); ?></h1>
<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
</header>
<div class="row">
		<section id="content" role="main">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry-block' ); ?>
				<?php endwhile; endif; ?>
		</section>		
</div>
<div class="row air">
	<?php get_template_part( 'nav', 'below' ); ?>
</div>
<div class="row">
	<div class="col-md-12">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>