<?php get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-md-6">
			<div class="well">
	
					<div class="anti-well">
						<?php echo get_the_post_thumbnail('medium'); ?>
					</div>
				
				<h1 class='huge'><?php echo get_the_title(); ?></h1>
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="well">
				<?php echo edit_post_link( "edit" ); ?> 
				<div class="content">
					<?php echo get_the_content(); ?>
				</div>
				
			</div>
			
		</div>
	</div>
	<div class="row">
		<div class="col-md-6"></div>
		<div class="col-md-6">
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		</div>
	</div>
	<?php endwhile; endif; ?>
<footer class="footer">
	<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>