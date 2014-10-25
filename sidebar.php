<aside id="sidebar" role="complementary">
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area">
			<div class='row xoxo'>
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</div>
		</div>
	<?php endif; ?>
</aside>