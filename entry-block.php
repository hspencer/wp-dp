<div class="col-sm-3">
	<article class='abstract well' id="post-<?php the_ID(); ?>" <?php post_class('well'); ?> >
	<header>
		<div class="anti-well-with-text">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('large');} ?>
		</div>
		<?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a><?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?> <?php edit_post_link("edit"); ?>

	</header>
		<?php get_template_part( 'entry', 'summary' ); ?> 
		<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>
</article>
</div>
