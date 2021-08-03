<?php get_header(); ?>

<section class="">
    <div id="carousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel3.jpg" alt="Third slide">
            </div>
        </div>
    </div>
</section>

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
        </div>
    </div>
</section>

<section id="apresentacao">
    <div class="container">
        <div class="row">
            <div class="col-sm text-center">
                <h3>O que é o GEM?</h3>
                <p class="text-justify">Criado em 2019, o Grupo Economia do Mar (GEM) é o único grupo de pesquisa do Brasil na área de Economia do Mar e Economia Azul, cadastrado no Diretório de Grupos de Pesquisa (DGP) do Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq).
                </p>
                <button type="button" class="btn btn-primary"SAIBA MAIS></button>
            </div>
            <div class="col-sm">
                <h4>Agora você vai aprender ainda mais sobre a economia do mar</h4>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>