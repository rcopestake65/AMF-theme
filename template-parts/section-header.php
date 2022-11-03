<header>

    <div class="header-container">
        <div class="logo" id="logo">
            <a id="logo" href="<?php echo get_bloginfo('url') . '/'; ?>"><img
                    src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>


        </div>

        <nav role="navigation">

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            <div class="toggle-btn-container">
                <button class="nav-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times hide"></i>
                </button>
            </div>
        </nav>
    </div><!-- .header-container -->

</header>


<div class="mobile-menu-container">
    <?php
wp_nav_menu(
array(
'theme_location' => 'mobile-menu',
'menu_class' => 'mobile-menu',
)
);
?>
</div>