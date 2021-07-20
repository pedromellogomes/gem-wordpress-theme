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

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>