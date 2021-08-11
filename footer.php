        <footer class="footer grid grid-cols-1 md:grid-cols-3 justify-items-center items-center p-4">
            <div class="p-6">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logoGEM.png" alt="Logo do GEM" class="w-24 h-auto"/>
            </div>

            <div class="flex justify-around md:pt-24">
                &copy; Copyright 2021 Grupo Economia do Mar
            </div>

            <div>
                <div class="footer_faleconosco font-bold py-2">FALE CONOSCO</div>
                <div class="flex justify-around">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/facebook.svg" hight="20px" width="20px" />
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/linkedin.svg" hight="20px" width="20px" />
                    </a>
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon/instagram.svg" hight="20px" width="20px" />
                    </a>
                </div>
            </div>

        </footer>

        <?php wp_footer(); ?>
    </body>
</html>