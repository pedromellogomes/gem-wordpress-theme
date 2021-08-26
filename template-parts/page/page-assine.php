<?php get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm" id="formularioAssine">
                <h2>Ficar por dentro do futuro da economia nunca foi tão simples.</h2>
                <?php echo do_shortcode( '[sibwp_form id=4]' ); ?>
            </div>
            <div class="col-sm" id="textoAssine">
                <h1>Assine</h1>
                <p>Ainda está em dúvida? Confira os benefícios de assinar a newsletter do GEM:</p>
                <ul>
                    <li>Aprenda mais e mantenha-se atualizado(a) sobre Economia do Mar e Governança do Oceano através de publicações mensais elaboradas por uma equipe altamente especializada nos temas em questão, sem pagar nada por isso;</li>
                    <li>Escolha qual(is) produto(s) GEM receber. Para saber mais sobre nossos produtos, visite a página de publicações;</li>
                    <li>Não se preocupe com spam. Tanto o GEM newsletter quanto o GEM policy brief são produtos mensais, então não iremos lotar sua caixa de entrada;</li>
                    <li>Desinscreva-se quando quiser através dos e-mails recebidos, sem compromisso.</li>
                </ul>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/ilustracaoAssine.svg" alt="">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
