<?php
/**
 * Header Navigation.
 */
?>
<div class="overlay has-fade"></div>

<nav class="flex justify-between p-6 items-center">
    <a href="<?php echo home_url(); ?>" class="">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/GEMhorizontal.png" alt="GEM" class="w-40 h-auto" />
    </a>

    <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <!-- Desktop  navegation -->
    <div class="hide-for-mobile">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header',
                    'container' => 'ul',
                    'menu_class' => 'desktop-menu'
                )
            );
        ?>
    </div>
    
    <!-- Sign link -->
    <a href="" class="flex flex-wrap items-center justify-around buttonAssine hide-for-mobile divide-x-2 divide-solid">
        <div class="mr-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/image.svg" hight="20px" width="20px" />
        </div>
        <div class="pl-2">
            ASSINE
        </div>
    </a>
</nav>

<!-- Mobile navegation -->
<div id="mobile_link" class="header__menu has-fade">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'header',
                'container' => 'ul',
                'menu_class' => 'mobile-menu'
            )
        );
        ?>
</div>