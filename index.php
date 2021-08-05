<?php get_header(); ?>

<section class="">
    <div id="carousel" class="carousel slide">
        <div class="carousel-inner" style="width: 100%; height: 400px">
            <ol class="carousel-indicators">
                <li data-target="carousel" data-slide-to="0" class="active"></li>
                <li data-target="carousel" data-slide-to="1"></li>
                <li data-target="carousel" data-slide-to="2"></li>
                <li data-target="carousel" data-slide-to="3"></li>
                <li data-target="carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel4.jpg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?php echo get_template_directory_uri() ?>/assets/img/carousel/carousel5.jpg" alt="Fifth slide">
            </div>
        </div>
    </div>
</section>

<section id="apresentacao">
    <div class="container">
        <div class="row">
            <div class="col-sm text-center">
                <h3 style="font-weight: bold;">O QUE É O GEM?</h3>
                <p class="text-justify">Criado em 2019, o Grupo Economia do Mar (GEM) é o único grupo de pesquisa do Brasil na área de Economia do Mar e Economia Azul, cadastrado no Diretório de Grupos de Pesquisa (DGP) do Conselho Nacional de Desenvolvimento Científico e Tecnológico (CNPq).
                </p>
                <button type="button" class="btn btn-primary">SAIBA MAIS</button>
            </div>
            <div class="linha-vertical"></div>
            <div class="col-sm newsletter">
                <h5 style="font-weight: bold;">FIQUE POR DENTRO DO MUNDO DA ECONOMIA DO <span style="color: #004b6a;">MAR</span></h5>
                <p style="font-size: small; padding: 0px;">Assine nossa newsletter e receba também nosso policy brief mensal</p>
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
            </div>
        </div>
    </div>
</section>

<section id="subgrupos">
    <h3>Subgrupos</h3>
</section>

<section id="ultimasPublicacoes">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h3>ULTIMAS PUBLICAÇÕES</h3>
            </div>
            <div class="linha-vertical"></div>
            <div class="col-sm">
                <h3 class="text-center">EQUIPE</h3>
                <p class="text-justify">O GEM nasceu de uma iniciativa individual do Prof. Dr. Thauan Santos (EGN), que identificou a ausência de um grupo sólido de pesquisa no contexto brasileiro sobre a temática em questão. Após mapeamento dos(as) interessados, e consideradas as diversidades regional, de gênero, de formação acadêmica e de experiência profissional, cada pesquisador(a) foi contatado(a) para a formação da equipe.</p>
                <button type="button" class="btn btn-primary">CONHEÇA NOSSA EQUIPE</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>