		<footer id="footer" role="contentinfo">
			<div id="license">
				<?php echo sprintf( __( '%1$s %2$s %3$s. <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/80x15.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Doble Página</span> por <a xmlns:cc="http://creativecommons.org/ns#" href="http://hspencer.info" property="cc:attributionName" rel="cc:attributionURL">Herbert Spencer</a> se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Licencia Creative Commons Atribución 4.0 Internacional</a>.', 'dp' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' {dp} %1$s.', 'dp' ), '<a href="https://github.com/hspencer/dp">está disponible en Github</a>' ); ?>
			</div>
		</footer>
	</div>
<?php wp_footer(); ?>
</body>
</html>