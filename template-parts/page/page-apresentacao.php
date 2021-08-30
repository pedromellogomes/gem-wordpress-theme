<?php get_header(); ?>

    <!-- Sessão 1 -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 md:px-40 p-6 md:p-12 justify-items-center">
        <div class="m-2">
            <div class="bg-black text-white text-center text-4xl font-bold p-6 transform -rotate-3 max-w-sm background-reverso">
                <div class="transform rotate-3">
                    Nossa história
                </div>
            </div>
            <div class="border-l-4 border-black m-6 mt-12 pl-6 max-w-screen-sm text-xl font-semibold">
                O Grupo Economia do Mar (GEM) foi criado em 2019 e, até o momento,
                é o único grupo de pesquisa do Brasil na área de Economia do Mar/Economia Azul
                cadastrado no Diretório de Grupos de Pesquisa do Conselho Nacional de Desenvolvimento Científico
                e Tecnológico (DGP/CNPq).
            </div>
        </div>
        <div class="m-2">
            <img src="<?php global $IMG_DIR; echo $IMG_DIR; ?>/apresentacao/peixinho.svg" class=" w-auto md:h-96">
        </div>
    </section>

    <!-- Sessão 2 -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-items-center md:px-40 p-12 background-reverso font-clara font-semibold md:text-xl">
        
            <div class="m-2 md:max-w-2xl">
                Coordenado pelo Prof. Dr. Thauan Santos (Escola de Guerra Naval),
                o GEM conta com pós-doutores(as), doutores(as), doutorandos(as), mestres(as), mestrandos(as) e graduandos(as) de diferentes regiões do Brasil,
                que pesquisam temas relacionados aos setores da economia do mar e à governança da economia azul.
            </div>
            <div class="flex flex-col items-center text-center m-2 ">
                <img src="<?php global $IMG_DIR; echo $IMG_DIR; ?>/apresentacao/capelo.svg" class="w-1/4">
                Somos 42 profissionais de diversos níveis acadêmicos unidos por um propósito
            </div>

            <div class="m-2 md:max-w-2xl">
                A criação do grupo decorreu de uma demanda nacional, dada a carência de estudos sistemáticos, acompanhamento e publicação de análises, dados e textos sobre o tema.
                Embora seja uma discussão bastante consolidada em alguns países, como Estados Unidos, China, Austrália e determinados países da União Europeia,
                ainda é uma agenda pouco aprofundada na América do Sul e, particularmente, no Brasil.
            </div>
            <div class="flex flex-col items-center text-center m-2 ">
                <img src="<?php global $IMG_DIR; echo $IMG_DIR; ?>/apresentacao/calculadora.svg" class="w-1/4">
                Trabalhamos pela difusão de informações consistentes sobre o que acreditaos ser o futuro da economia.
            </div>

    </section>

    <!-- Sessão 3 -->
    <section class="grid grid-cols-1 justify-items-center text-justify md:text-center p-6 md:p-40 font-semibold text-xl">
        <div class="md:p-6 m-6 md:max-w-6xl">
            Sendo assim, o GEM tem como principal objetivo contribuir com as políticas públicas nacionais e regionais relacionadas à economia do mar.
            Considerando que no Brasil ainda não existe um conceito oficial sobre “economia do mar” ou “economia azul”,
            o GEM tem como missão prover dados e análises acerca dos setores da economia do mar do Brasil,
            por meio de cooperação com instituições nacionais e internacionais.
        </div>
        <img src="<?php global $IMG_DIR; echo $IMG_DIR; ?>/apresentacao/objetivo-missao.svg" class="m-8 w-3/4 md:w-1/3">
        
        <div class="md:p-6 m-6 md:max-w-6xl">
            A visão do GEM é de se consolidar como um grupo de pesquisa de referência nos estudos brasileiros sobre economia do mar,
            contribuindo com a transformação da realidade nacional
            e promovendo o desenvolvimento sustentável.
            Dentre seus valores, destacam-se: sustentabilidade, ética, diversidade, excelência, independência e transparência.
        </div>
        <img src="<?php global $IMG_DIR; echo $IMG_DIR; ?>/apresentacao/visao-valores.svg" class="m-8 w-3/4 md:w-1/3">
    </section>

<?php get_footer(); ?>