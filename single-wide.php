<?php get_header(); ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="labels">
		<?php
			$posttags = get_the_tags();
			if ($posttags) {
				foreach($posttags as $tag) {
					echo "<a class='label' href=\"";
					echo get_tag_link($tag->term_id);
					echo "\">".$tag->name."</a>";
				}
			}
		?>
	</div>
	<h1 class='huge-entry-title'><?php echo get_the_title(); ?></h1>
	<?php get_template_part( 'entry', 'meta' ); ?> 
	
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<?php echo edit_post_link( "edit" ); ?> 
				<div class="content-entry">
					<?php echo get_the_content(); ?>
				</div>
			</div>
			<div class="aftershadow">
				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>

	<div class='row hidden-xs'>
		<div class="col-sm-12">
			<?php dynamic_sidebar( 'for singles' ); ?>
		</div>
	</div>
	

<footer class="footer">
	<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_footer(); ?>