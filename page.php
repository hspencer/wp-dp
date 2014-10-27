<?php get_header(); ?>
<header class="header">
	<h1 class='huge-entry-title'><?php echo get_the_title(); ?></h1>
</header>

<div class="row">
	<div class="col-md-6">
		<div class="well">
			<div class="anti-well">
				<?php
					if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}
				?>
			</div>
		</div>
		<div>
			<?php dynamic_sidebar( 'for pages' ); ?>
		</div>
	</div>
	<div class="col-md-6">
		<section id="content" role="main" class='well'>
			<div class="content">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php edit_post_link("edit"); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<section class="entry-content">
						<?php the_content(); ?>
						<div class="entry-links"><?php wp_link_pages(); ?></div>
					</section>
				</article>
				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>