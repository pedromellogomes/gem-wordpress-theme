<?php
    global $IMG_DIR;
?>

<?php get_header(); ?>

<main class="grid grid-cols-1 md:grid-cols-2 gap-x-8 justify-items-center">
    <section class="background-reverso font-clara md:justify-self-end">
        <div class="p-6 md:px-20 md:my-20">
            <div class="text-3xl font-semibold text-center my-10">
                Fale com o GEM
            </div>
            <?php echo do_shortcode( '[wpforms id="37"]' ); ?>
        </div>
    </section>
    <section class="md:justify-self-start md:flex md:items-center">
        <div class="text-center md:px-20">
            <img src="<?php echo $IMG_DIR; ?>/fale-conosco/gem_grupos.svg" class="md:w-96 m-6" alt="">
            <div class="px-20">
                Nossas redes sociais:
                <div class="flex justify-around my-4">
                    <a href="https://www.facebook.com/grupoeconomiadomar">
                        <img src="<?php echo $IMG_DIR; ?>/fale-conosco/facebook.svg" class="h-6" alt="">
                    </a>
                    <a href="https://www.instagram.com/grupoeconomiadomar">
                        <img src="<?php echo $IMG_DIR; ?>/fale-conosco/instagram.svg" class="h-6" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/grupoeconomiadomar">
                        <img src="<?php echo $IMG_DIR; ?>/fale-conosco/linkedin.svg" class="h-6" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>