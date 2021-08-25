<?php
    get_header();

    $category = get_queried_object();

    
?>
    <!-- Category header image. -->
    <section>
        <img src="<?php echo $IMG_DIR; ?>/subgrupo/header/<?php echo $category->slug; ?>.jpg" alt="<?php echo $category->name ?> imagem de cabeçalho" >
    </section>
    
    <!-- Category infographic -->
    <section>
        <img src="<?php echo $IMG_DIR; ?>/subgrupo/infografico<?php echo $category->slug; ?>.svg"" alt="<?php echo $category->name ?> infográfico">
    </section>

    <!-- Policy Brief by category session -->
    <section class="flex flex-col items-center py-12">
        <?php $policybriefs = new WP_Query([ 'post_type' => 'policybrief', 'category_name' => $category->slug, 'post_status' => 'publish', 'posts_per_page' => 3 ]); ?>
        <div>
            <h1 class="font-bold"> PUBLICAÇÕES </h1>
        </div>
        
        <div class="grid grid-col-1 md:grid-cols-3">

            <?php if ( $policybriefs->have_posts() ) : ?>
                <?php while ( $policybriefs->have_posts() ) : $policybriefs->the_post(); ?>
                    <div class="text-center mx-12 my-6 p-6">

                        <!-- Post thumbnail with link -->
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-thumbnail', [ 'class' => 'fit-thumbnail rounded-2xl bg-gray-200' ] ); ?>
                        </a>
                        <!-- Post link -->
                        <div class="p-2">
                            <a href="<?php the_permalink(); ?>" class="font-semibold text-gray-500">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </div>    

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
         
        </div>
    </section>

    <!-- Articles by category session -->
    <section class="flex flex-col items-center py-12 background-reverso">
        <?php $article = new WP_Query([ 'post_type' => 'article', 'category_name' => $category->slug, 'post_status' => 'publish', 'posts_per_page' => 3 ]); ?>
        <div>
            <h1 class="font-bold font-clara"> MATÉRIAS </h1>
        </div>
        
        <div class="grid grid-col-1 md:grid-cols-2">

            <?php if ( $article->have_posts() ) : ?>
                <?php while ( $article->have_posts() ) : $article->the_post(); ?>
                    <div class="text-center mx-12 my-6 p-6">
                        
                        <div class="p-2 font-clara">
                            <!-- Post link -->
                            <a href="<?php the_permalink(); ?>" class="font-bold text-xl">
                                <?php the_title(); ?>
                            </a>
                            <!-- Post date -->
                            <div class="text-base font-semibold">
                                <?php the_date(); ?>
                            </div>
                        </div>

                        <!-- Post Thumbnail with link -->
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('post-thumbnail', [ 'class' => 'fit-thumbnail rounded-2xl bg-gray-200' ] ); ?>
                        </a>
                    </div>    

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
         
        </div>
    </section>

<?php get_footer(); ?>