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
	<div class="row">
		<div class="col-sm-6">
			<div class="well">
					<div class="anti-well-with-text">
						<?php
							if ( has_post_thumbnail() ) {
								the_post_thumbnail('large');
							}
							else {
								echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/rotate.php" />';
							}
						?>
					</div>
				<h1 class='huge'><?php echo get_the_title(); ?></h1>
				<?php get_template_part( 'entry', 'meta' ); ?> 
			</div>
			<div class='row hidden-xs'>
				<?php dynamic_sidebar( 'for singles' ); ?>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="well">
				<?php echo edit_post_link( "edit" ); ?> 
				<div class="entry-content">
					<?php echo the_content(); ?>
				</div>
			</div>
			<div class="aftershadow">
				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			</div>
		</div>
	</div>
	<?php endwhile; endif; ?>
<footer class="footer">
	<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
</section>
<?php get_footer(); ?>