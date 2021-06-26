<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
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

        <section id="apresentacao" class="h-screen grid grid-cols-1 md:grid-cols-2 p-12">
            <div class="col-span-1 text-center p-6 md:pl-40">
                <h2 class="md:text-right">Apresentação</h2>
                <p class="text-justify md:text-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sunt, voluptatum aliquam saepe maiores repellat? Veniam officia veritatis mollitia assumenda eveniet repudiandae distinctio. Unde quasi ipsa dolorum iste veritatis nulla? lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis provident inventore quaerat, minima vitae id, quas odio impedit animi, suscipit ut nulla praesentium tenetur labore quam natus cumque numquam tempora!</p>
                <a href="#" class="md:text-right text-white bg-blue-500 hover:bg-blue-600 p-2 rounded shadow">Saiba mais</a>
            </div>
            <div class="col-span-1 py-6 hidden md:block">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel2.jpg" alt="GEM" width="470px" />
            </div>
        </section>

        <section id="subgrupos" class="flex flex-wrap flex-col  md:flex-row items-center md:justify-evenly p-6 md:pl-60 md:pr-60">
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Defesa e Segurança</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Energia</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Pesca e Aquicultura</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Recursos Minerais</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Conceitos e Metodologia</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="">Transporte e Infraestrutura</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Construção e Reparo</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="http://">Turismo, Esporte e Lazer</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="">Clima e Meio Ambiente</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="">Relações Geopolíticas</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="">Blue Finance</a>
                </div>
            </div>
            <div class="">
                <div class="bg-blue-600 shadow rounded-full w-40 h-40 m-8">
                </div>
                <div class="text-center">
                    <a href="">Relações Sociais</a>
                </div>
            </div>
        </section>

        <section id="publicacoes" class="flex flex-col justify-center text-center p-12 md:pl-72 md:pr-72 bg-gray-100">
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

        <section class="flex flex-wrap justify-center content-center p-6">
            <div class="text-center w-3/4">
                <h2>Equipe</h2>
                <p class="text-justify p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste aut laudantium ex molestiae quasi! Provident iusto unde sapiente quis officia reprehenderit consequatur in! Quasi eaque officia nostrum id, laboriosam placeat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci deserunt ex quam, nemo exercitationem ab maxime atque dolor. Excepturi possimus odio exercitationem aliquam labore eos optio quam consectetur nesciunt iure. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti dicta aliquid ullam eius dignissimos non nihil quia ea accusantium quidem necessitatibus, vitae sit architecto. Mollitia adipisci eligendi deleniti blanditiis repellat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus incidunt magnam porro id ratione recusandae officia modi amet fugit eos laborum, officiis ut aperiam optio et architecto. Adipisci, ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis, voluptates repudiandae. Ipsa facere consequuntur dolorum suscipit quidem, cumque dolore quo quia placeat soluta minima, itaque, ea atque temporibus mollitia at!</p>
                <a href="" class="bg-blue-500 text-white hover:bg-blue-600 p-2 rounded shadow">Saiba mais</a>
            </div>
        </section>
<?php get_footer(); ?>