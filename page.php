<?php
    $page_name = get_post()->post_name;
    get_template_part( 'template-parts/page/page', $page_name );
?>