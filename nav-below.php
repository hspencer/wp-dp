<?php global $wp_query; if ( $wp_query->max_num_pages > 1 ) { ?>
<nav id="nav-below" class="navigation row" role="navigation">
	<div class="col-xs-6">
		<div class="nav-previous">
			<?php next_posts_link(sprintf( __( '%s older', 'dp' ), '<span class="meta-nav">&larr;</span>' ) ) ?>
		</div>
	</div>
	<div class="col-xs-6">
		<div class="nav-next">
			<?php previous_posts_link(sprintf( __( 'newer %s', 'dp' ), '<span class="meta-nav">&rarr;</span>' ) ) ?>
		</div>
	</div>
	
</nav>
<?php } ?>