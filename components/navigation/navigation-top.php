<nav id="site-navigation" class="main-navigation" role="navigation">
    <?php
        if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
		<?php
		endif;
        ?>
		<section class="top-bar-section">
            <?php synesthesia2017_top_bar_l(); ?>
            <?php synesthesia2017_top_bar_r(); ?>
        </section>
	<!--<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>-->
</nav>
