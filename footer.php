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

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>