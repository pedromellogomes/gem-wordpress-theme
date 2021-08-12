
<?php

/** Post loop */
while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/post/single', get_post_type() );

endwhile;

?>