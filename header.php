<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset='<?php bloginfo( 'charset' ); ?>' />
	<meta name='viewport' content='width=device-width' />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel='stylesheet' type='text/css' href='<?php echo get_stylesheet_uri(); ?>' />
	
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id='wrapper' class='hfeed'>
		<nav class="navbar navbar-default" role='navigation'>
			<div class='container container-fluid'>
				<section class='navbar-header' id='branding'>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#walker">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'dp' ); ?>" rel='home'>
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					</a>
					<!--
					<span class='tagline' id='site-description'>
						<?php bloginfo( 'description' ); ?>
					</span> -->
				</section>
				<div id='walker' class='collapse navbar-collapse'>
					<nav id='menu' role='navigation'>
						<?php wp_nav_menu( array(
							'menu'              => 'primary',
							'theme_location'    => 'main-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => '',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
							'walker'            => new wp_bootstrap_navwalker())
						);
						?>
						<form action="<?php echo home_url( '/' ); ?>" method="get" class="navbar-form navbar-right" role="search">
							<div class="form-group">
								<input type="text" name="s" class="form-control" placeholder="Buscar..." id="search" value="<?php the_search_query(); ?>" />
							</div>
							<!-- <button type="submit" class="btn btn-info" style='margin-left: -5px'>Buscar</button> -->
						</form>
						<!-- 
						<nav class='pull-right'>
							<li  id='search'>
								<?php get_search_form(); ?>
							</li>
						</nav>
						-->
					</nav>
				</div>
			</div>
		</nav>
		
		<div id='container' class='container'>