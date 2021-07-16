<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="header bg-gray-900">
            <div class="overlay has-fade"></div>

            <nav class="flex justify-between p-6 content-center">
                <a href="/" class="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/GEMhorizontal.png" alt="GEM" class="w-40 h-auto" />
                </a>

                <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

                <div class="header__links hide-for-mobile">
                    <a href="/">Home</a>
                    <a href="<?php echo get_template_directory_uri() ?>/pages/apresentacao.php">Apresentanção</a>
                    <a href="<?php echo get_template_directory_uri() ?>/pages/subgrupos.php">Subgrupos</a>
                    <a href="<?php echo get_template_directory_uri() ?>/pages/equipe.php">Equipe</a>
                    <a href="/">Publicações</a>
                    <a href="/">Fale conosco</a>
                </div>

                <a href="#" class="button header__cta hide-for-mobile">Assine a newsletter</a>
            </nav>
            <div id="mobile_link" class="header__menu has-fade">
                <a href="#apresentacao" class="mobile_link">Apresentanção</a>
                <a href="#subgrupos" class="mobile_link">Subgrupos</a>
                <a href="#equipe" class="mobile_link">Equipe</a>
                <a href="#publicacoes" class="mobile_link">Publicações</a>
                <a href="#faleconosco" class="mobile_link">Fale conosco</a>
            </div>
        </header>