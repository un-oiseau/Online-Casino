</main>

<footer>
	<div class="ocs-container">
		<div class="flex-box footer-logo">
			<?php dynamic_sidebar( 'footer_logo' ); ?>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<ul class="footer-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul>
		<?php endif; ?>

		<div class="footer-logos">
			<?php dynamic_sidebar( 'footer_logos' ); ?>
		</div>

		<?php if ( has_nav_menu( 'footer_bottom' ) ) : ?>
			<ul class="footer-bootom-nav">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer_bottom',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '',
						'link_after'     => '',
						'fallback_cb'    => false,
					)
				);
				?>
			</ul>
		<?php endif; ?>

		<p>Copyright © <?php echo date('Y'); ?> glucksspiele.ch All Rights Reserved.</p>

		<?php dynamic_sidebar( 'footer_text' ); ?>

	</div>
</footer>

<img id="to-top" src="<?php echo get_template_directory_uri(); ?>/images/top-arrow.png" alt="to top" title="To top">

<?php wp_footer(); ?>

</body>
</html>
