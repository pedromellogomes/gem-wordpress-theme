<div class="flex justify-center">
    <article id="article" class="max-w-4xl px-2 mt-10 md:mt-20 lg:mt-40">

        <header class="border-b-2 border-gray-400 border-opacity-25 py-6">
            <div class="flex justify-between">
                <h1 class="font-bold">
                    <?php the_title(); ?>
                </h1>
                <div class="flex flex-col justify-between">
                    <?php
                        $linkedin = get_the_author_meta( 'linkedin' );
                        if ( $linkedin ) :
                    ?>
                        <a href="<?php echo $linkedin; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/linkedin.svg" hight="20px" width="20px"  alt="linkedin link">
                        </a>
                    <?php endif; ?>
                    <?php
                        $facebook = get_the_author_meta( 'facebook' );
                        if ( $facebook ) :
                    ?>
                        <a href="<?php echo $facebook; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/facebook.svg" hight="20px" width="20px"  alt="facebook link">
                        </a>
                    <?php endif; ?>
                    <?php
                        $instagram = get_the_author_meta( 'instagram' );
                        if ( $instagram ) :
                    ?>
                        <a href="<?php echo $instagram; ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/instagram.svg" hight="20px" width="20px"  alt="instagram link">
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <div class="text-gray-500">
                <div class="author-img">

                </div>
                <div>
                    <div class="font-bold italic">
                        Escrito por <?php the_author_posts_link(); ?>
                    </div>
                    <p class="text-sm">
                        Publicado em <?php echo get_the_date( 'd/m/Y' ); ?>. Última atualização: <?php echo get_the_modified_date( 'd/m/Y' ); ?>.
                    </p>
                </div>
            </div>
        </header>
        
        <div class="my-8 text-justify">
            <?php the_content(); ?>
        </div>

        <!-- <div class="flex my-6">
            <div class="m-4">
                image
            </div>
            <div>
                <div class="font-bold">
                    <?php the_author(); ?>
                </div>
                <div>
                    <?php echo get_the_author_meta( 'description' ); ?>
                </div>
            </div>
        </div> -->

        <div class="text-center mb-12 pt-12 border-t-2 border-gray-400 border-opacity-25">
            <h1 class="text-3xl mb-2">
                Não perca mais nada sobre o mundo da economia do mar.
            </h1>
            <p class="mt-0 mb-4">
                Receba matérias como essa no seu e-mail sem pagar nada por isso.
            </p>
            <a href="<?php echo get_permalink( get_page_by_path( 'assine' ) ); ?>" class="assineBtn rounded-md text-white py-2 px-12">
                ASSINE
            </a>
        </div>
    </article>
</div>
