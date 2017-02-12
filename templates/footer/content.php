<div class="site-footer__container">
	<div class="site-footer__item">
		<h2 class="us">
		Nosotros
		</h2>
		<picture>
			<img src="<?php get_template_part( 'templates/footer/logo'); ?>" alt="Logo Footer" />
		</picture>
		<p><?php bloginfo('description'); ?></p>
		<!-- <span class="cards">
			<i class="fa fa-cc-visa fa-3x"></i>
			<i class="fa fa-cc-mastercard fa-3x"></i>
		</span> -->
	</div>
	<div class="site-footer__item">
		<h2 class="categories">Categorías</h2>
		<?php wp_nav_menu(
				array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'link_before'	=> '<i class="fa fa-angle-right"></i> ',
				'container_class' => 'site-footer__item--nav',
				'menu_class' => 'site-footer__item--nav-categories',
				'depth' => 1
				)
			);
		?>
	</div>
	<div class="site-footer__item">
		<h2 class="contact-us">
			<i class="fa fa-map-marker fa-lg" aria-hidden="true"></i>
			Dirección
		</h2>
		<div class="site-footer__item--contact">
			<?php get_template_part( 'templates/contactame/address'); ?>
		</div>

		<h2 class="contact-us">
			Contáctenos
		</h2>
		<div class="site-footer__item--contact">
			<i class="fa fa-phone fa-lg"></i>
			<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone-call.png" alt="" /> -->
			<span>
				<a href="tel:<?php get_template_part( 'templates/contactame/phone', 'local'); ?>">
				  <?php get_template_part( 'templates/contactame/phone', 'local'); ?>
				</a>
			</span>
		</div>
		<!-- <div class="site-footer__item--contact">
			<i class="fa fa-mobile"></i>
			<span>
				<a href="tel:<?php get_template_part( 'templates/contactame/phone', 'mobile'); ?>">
				  <?php get_template_part( 'templates/contactame/phone', 'mobile'); ?>
				</a>
			</span>
		</div> -->
		<!-- <div class="site-footer__item--contact">
			<i class="fa fa-whatsapp" aria-hidden="true"></i>
			<span>
				<a href="tel:<?php get_template_part( 'templates/contactame/phone', 'whatsapp'); ?>">
				  <?php get_template_part( 'templates/contactame/phone', 'whatsapp'); ?>
				</a>
			</span>
		</div> -->
		<div class="site-footer__item--contact">
			<i class="fa fa-envelope fa-lg"></i>
			<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/envelope.png" alt="" /> -->
			<!-- <span class="email"><?php bloginfo('admin_email'); ?></span> -->
			<span>
				<a href="mailto:<?php get_template_part( 'templates/contactame/email'); ?>">
					<?php get_template_part( 'templates/contactame/email'); ?>
				</a>
			</span>
		</div>
		<div class="site-footer__item--contact">
			<i class="fa fa-clock-o fa-lg"></i>
			<!-- <img src="<?php bloginfo('stylesheet_directory'); ?>/images/time.png" alt="" /> -->
			<span>8:30 am a 4:30 pm</span>
		</div>
	<!-- 	<div class="site-footer__item--contact">
			Somos tienda virtual con entregas previo acuerdo.
		</div> -->
	</div>
	<div class="site-footer__item">
		<h2 class="form">
		Mensaje Directo
		</h2>
		<!-- <h2 class="form"></h2> -->
		<?php get_template_part( 'templates/footer/formcraft'); ?>
	</div>
</div>
