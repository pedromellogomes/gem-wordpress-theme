<?php get_header(); ?>

<section id="carrossel">
    <div class="container-fluid">
        <div id="MainSlider" class="carousel slide" data-ride="carousel" style="height: 300px">
            <ol class="carousel-indicators">
                <li data-target="MainSlider" data-slide-to="0" class="active"></li>
                <li data-target="MainSlider" data-slide-to="1"></li>
                <li data-target="MainSlider" data-slide-to="2"></li>
                <li data-target="MainSlider" data-slide-to="3"></li>
                <li data-target="MainSlider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/carousel1.jpg" alt="Primeiro slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/carousel2.jpg" alt="Segundo slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/carousel3.jpg" alt="Terceiro slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/carousel4.jpg" alt="Quarto slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/carousel5.jpg" alt="Quinto slide">
                </div>
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