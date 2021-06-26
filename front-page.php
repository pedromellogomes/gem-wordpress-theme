<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="header">
            <div class="overlay has-fade"></div>

            <nav class="flex justify-between p-6 content-center">
                <a href="/" class="">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/gem_logo.jpg" alt="GEM" class="w-24 h-auto" />
                </a>

                <a id="btnHamburger" href="#" class="header__toggle hide-for-desktop">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

                <div class="header__links hide-for-mobile">
                    <a href="/">Home</a>
                    <a href="#apresentacao">Apresentanção</a>
                    <a href="#subgrupos">Subgrupos</a>
                    <a href="#equipe">Equipe</a>
                    <a href="#publicacoes">Publicações</a>
                    <a href="#faleconosco">Fale conosco</a>
                </div>

                <a href="#" class="button header__cta hide-for-mobile">Assine a newsletter</a>
            </nav>
            <div class="header__menu has-fade">
                <a href="/">Home</a>
                <a href="#apresentacao">Apresentanção</a>
                <a href="#subgrupos">Subgrupos</a>
                <a href="#equipe">Equipe</a>
                <a href="#publicacoes">Publicações</a>
                <a href="#faleconosco">Fale conosco</a>
            </div>
        </header>

        <section id="apresentacao" class="h-1/2 grid grid-cols-1 md:grid-cols-2 gap-4 p-12 md:pl-60 md:pr-60">
            <div class="text-center md:text-right space-y-3">
                <h1 class="md:text-right">Quem somos</h1>
                <p class="text-justify md:text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sunt, voluptatum aliquam saepe maiores repellat? Veniam officia veritatis mollitia assumenda eveniet repudiandae distinctio. Unde quasi ipsa dolorum iste veritatis nulla? lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis provident inventore quaerat, minima vitae id, quas odio impedit animi, suscipit ut nulla praesentium tenetur labore quam natus cumque numquam tempora!</p>
                <div class="md:text-right">
                    <a href="#" class="text-white bg-blue-500 hover:bg-blue-600 p-2 rounded shadow">Saiba mais</a>
                </div>
            </div>
            <div class="hidden md:block">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel2.jpg" alt="GEM" width="470px" />
            </div>
        </section>

        <section id="newsletter" class="flex flex-wrap flex-col content-center justify-center text-center p-6 pt-20 pb-20 bg-gray-100">
            <div class="md:w-1/2">
                <h1>Newsletter</h1>
                <h3 class="font-light italic text-sm md:text-base">Fiquei por dentro. Assine nossa newsletter e receba tudo no seu email.</h3>

                <form action="" method="post" class="flex flex-col place-items-center m-auto space-y-2 w-4/6">
                <input type="text" name="name" id="name" placeholder="Nome" class="border-2 border-blue-500 border-opacity-25 focus:border-opacity-80 rounded p-1 w-9/12" />
                <input type="email" name="email" id="email" placeholder="E-mail" class="border-2 border-blue-500 border-opacity-25 focus:border-opacity-80 rounded p-1 w-9/12" />
                <div>
                    <input type="checkbox" name="newsletter" id="newsletter" />
                    <label for="newsletter" class="text-sm md:text-base">Desejo receber a newsletter</label>
                </div>
                <div>
                    <input type="checkbox" name="policybrief" id="policybrief" />
                    <label for="policybrief" class="text-sm md:text-base">Desejo receber o policy brief</label>
                </div>
                <input type="submit" value="Assinar" class="w-24 h-10 rounded bg-blue-500 hover:bg-blue-600 text-white" />
                </form>
            </div>
        </section>

        <section id="subgrupos" class="grid grid-cols-2 md:grid-cols-6 gap-4 p-6 pt-20 pb-20 text-center justify-items-center md:pr-32 md:pl-32">
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Defesa e Segurança</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Energia</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Pesca e Aquicultura</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Recursos Minerais</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <div class="">
                <a href="">Conceitos e Metodologia</a>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Transporte e Infraestrutura</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Construção e Reparo</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Turismo, Esporte e Lazer</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Clima e Meio Ambiente</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <div class="">
                <a href="">Relações Geopolíticas</a>
                </div>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Blue Finance</a>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-blue-600 shadow rounded-full w-28 h-28 m-2"></div>
                <a href="">Relações Sociais</a>
            </div>
        </section>

        <section id="publicacoes" class="flex flex-col justify-center text-center p-6 pt-20 pb-20 md:pl-72 md:pr-72 bg-gray-100">
            <div class="p-6 text-center">
                <h2>Publicações</h2>
            </div>
            <div class="flex flex-col md:flex-row justify-between">
                <?php $recent_posts = wp_get_recent_posts( array( 
                    'numberposts' => 4,
                    'posts-status' => 'publish'
                ));
                foreach( $recent_posts as $key=>$post_item ) : ?>
                    <div class="p-4 <?php if($key == 3) echo "hidden xl:block" ?>">
                        <div>
                            thumbnail
                        </div>
                        <div>
                            <h3><?php echo $post_item['post_title'] ?></h3>
                        </div>
                        <p class="italic extralight m-2 p-2">
                            <?php echo $post_item['post_excerpt'] ?>
                        </p>
                        <a href="<?php echo get_permalink($post_item['ID']) ?>" class="text-white bg-blue-500 hover:bg-blue-600 p-2 rounded shadow">
                            Saiba mais
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="flex flex-wrap justify-center content-center p-6 pt-20 pb-20">
            <div class="text-center w-3/4">
                <h2>Equipe</h2>
                <p class="text-justify p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur maxime quia omnis voluptas expedita eos error ut, optio consectetur, unde quaerat, doloribus ullam. Fugit iure nobis, officia sit delectus tempore.</p>
                <a href="" class="bg-blue-500 text-white hover:bg-blue-600 p-2 rounded shadow">Saiba mais</a>
            </div>
        </section>
<?php get_footer(); ?>