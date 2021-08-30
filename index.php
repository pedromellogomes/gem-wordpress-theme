<?php get_header(); ?>
<main id="home-page">
    <section class="section-carousel">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
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

    <section id="quem-somos">
        <div class="container">
            <div class="row">
                <div class="col-sm text-center">
                    <h3 style="font-weight: bold;">O QUE É O GEM?</h3>
                    <p class="text-justify texto">Criado em 2019, o Grupo Economia do Mar (GEM) é o único grupo de pesquisa do Brasil na área de Economia do Mar e Economia Azul, cadastrado no Diretório de Grupos de Pesquisa (DGP) do Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq).
                    </p>
                    <button type="button" class="btn btn-primary">SAIBA MAIS</button>
                </div>

                <div class="hidden md:block linha-vertical"></div>
                
                <div class="col-sm newsletter">
                    <h5 style="font-weight: bold;">FIQUE POR DENTRO DO MUNDO DA ECONOMIA DO <span style="color: #004b6a;">MAR</span></h5>
                    <p style="font-size: small; padding: 0px;">Assine nossa newsletter e receba também nosso policy brief mensal</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSedVzlEUela8nxwRwW3oHK-6wNMmvDgrxNhY7VNjYlBOjfftQ/viewform">Para assinar é só preencher nosso formulário clicando aqui.</a>
                    <!--
                    <?php echo do_shortcode('[sibwp_form id=2]'); ?>
                    -->
                    <!--
                    <form>
                        <div class="form-group row">
                            <label for="exampleInputNome" class="col-sm-2 col-form-label">Nome: </label>
                            <div class="col-sm-10">
                                <input type="nome" class="form-control" id="exampleInputNome">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleInputEmai" class="col-sm-2 col-form-label">Email: </label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="exampleInputEmail">
                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Desejo Receber a Newsletter</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Desejo receber o policy brief</label>
                        </div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/newsletter_site.svg"/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    -->
                </div>
            </div>
        </div>
    </section>

    <section id="subgrupos">
        <h1>SUBGRUPOS</h1>
        <?php $categories = get_terms('category', ['hide_empty' => 0 ]); ?>
        <div class="row font-clara md:p-12">
            <?php
                foreach ($categories as $term) :
                    $category = get_term($term->term_id);
                    if($category->slug!="sem-categoria"):
            ?>
                <div class="col-6 col-sm-4 col-md-2 logoSubgrupos">
                    <a href="<?php echo get_term_link($category->term_id); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/subgrupo/icons/<?php echo $category->slug; ?>.svg" alt="">
                        <div>
                            <?php echo $category->name; ?>
                        </div>
                    </a>
                    
                </div>
            <?php 
                endif;
                endforeach;
            ?>
        </div>
    </section>

    <section id=" ultimasPublicacoes">
        <div class="flex flex-col md:flex-row py-12">
            <div class="md:w-2/3">
                <div class="flex flex-wrap content-center">
                    <div class="text-side-box w-8 mr-2"></div>
                    <h2>ULTIMAS PUBLICAÇÕES</h2>
                </div>
                <div class="flex text-center p-6">
                    <?php
                        $posts = get_posts( [ 'post_status' => 'publish', 'numberposts' => 5 ] );
                        foreach ($posts as $post) :
                            setup_postdata($post);
                    ?>
                        <div class="h-1/4 p-6 m-2">
                            <div class="h-44 w-36 m-2 rounded-md bg-gray-300">
                                thumbnail
                            </div>
                            <a href="<?php the_permalink(); ?>" class="">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    <?php
                        endforeach;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>

            <div class="hidden md:block linha-vertical"></div>

            <div class="md:w-1/3 p-6">
                <div class="flex flex-col justify-center md:px-32">
                    <div>
                        <h2 class="text-center">
                            EQUIPE
                        </h2>
                    </div>

                    <div class="text-justify my-4">
                        O GEM nasceu de uma iniciativa individual do Prof. Dr. Thauan Santos (EGN), que identificou a ausência de um grupo sólido de pesquisa no contexto brasileiro sobre a temática em questão. Após mapeamento dos(as) interessados, e consideradas as diversidades regional, de gênero, de formação acadêmica e de experiência profissional, cada pesquisador(a) foi contatado(a) para a formação da equipe.
                    </div>
                    
                    <div class="text-center">
                        <a href="<?php echo get_permalink( get_page_by_path( 'equipe' ) ); ?>" class="btn btn-primary">
                            Saiba mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>