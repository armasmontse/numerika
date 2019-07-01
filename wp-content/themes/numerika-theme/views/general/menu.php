<header class="header">
	<div class="grid__container">
		
		<div class="group-one">
			<a href="<?php echo BLOGURL ?>">
				<img class="logo" src="<?php echo THEMEURL ?>images/logo/logo-numerika.svg" alt="">
			</a>
		</div>
		
		<div class="group-two menu menu--mobile">
			<?php
                wp_nav_menu(array(
					'menu'           => "main",
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'lista',
            	));
				?>
		</div>
		
		<div class="header__collapse">
			<button class="header__menu open">
				Menú
			</button>
			<button class="header__menu responsive-close">
				Cerrar
			</button>
		</div>

	</div>
</header>