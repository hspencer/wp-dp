<?php get_header(); ?>
<header class="header">
	<h1 class='huge-entry-title'><?php echo get_the_title(); ?></h1>
</header>

<div class="row">
	<div class="col-sm-6 hidden-xs">
		<div class="well">
			<div class="anti-well">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}
					else {
						echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/img/rotate.php" />';
					}
				?>
			</div>
		</div>
		<div class='row'>
			<?php dynamic_sidebar( 'for pages' ); ?>
		</div>
	</div>
	<div class="col-sm-6">
		<section id="content" role="main" class='well'>
			<?php edit_post_link("edit"); ?>
			<div class='organic'>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section class="entry-content">
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</section>
				</article>
			</div>
		</section>
		<div class='aftershadow'>
			<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>