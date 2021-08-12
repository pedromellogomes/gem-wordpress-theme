<?php

/**
 * Definitions.
 */
if ( ! defined( 'GEM_DIR_PATH' ) ) {
    define( 'GEM_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'GEM_DIR_URI' ) ) {
	define( 'GEM_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

/**
 * Custom global variables.
 */
if ( ! function_exists( 'gem_global_variables' ) ) {

    function gem_global_variables() {
        global $GEM_DIR_PATH;
        $GEM_DIR_PATH = GEM_DIR_PATH;
        
        global $GEM_DIR_URI;
        $GEM_DIR_URI = GEM_DIR_URI;
        
        global $SUBGRUPO_DIR_HEADER;
        $SUBGRUPO_DIR_HEADER = $GEM_DIR_URI . '/assets/img/subgrupo/header';
        
        global $SUBGRUPO_DIR_INFOGRAFICO;
        $SUBGRUPO_DIR_INFOGRAFICO = $GEM_DIR_URI . '/assets/img/subgrupo/infografico';
    }
    add_action( 'init', 'gem_global_variables' );
}
/**
 * Initial theme setup.
 * 
 */
if ( ! function_exists( 'gem_setup_theme' ) ) {

    function gem_setup_theme() {
        /**
         * 
         */
        add_theme_support( 'menus' );
        
        /**
         * Add post thumbnail support.
         */
        add_theme_support( 'post-thumbnails' );

        /**
         * Allow post images to align widely.
         */
        add_theme_support( 'align-wide' );

        /**
         * Change markeup form to a valid HTML 5.
         */
        add_theme_support( 'html5', [
            'search-form',
            'script',
            'style'
        ] );

    }

    add_action( 'after_setup_theme', 'gem_setup_theme' );
}

/**
 * Load scripts and styles.
 * 
 */
if ( ! function_exists( 'gem_enqueue_scripts_and_styles' ) ) {

    function gem_enqueue_scripts_and_styles() {
        /**
         * Enqueue CSS.
         */
        wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', [], '4.0.0', 'all' );
        wp_enqueue_style( 'tailwind', 'https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css', [], '2.0', 'all' );
        wp_enqueue_style( 'main', GEM_DIR_URI . '/assets/css/main.css', [ 'bootstrap', 'tailwind' ] , filemtime( GEM_DIR_PATH . '/assets/css/main.css'), 'all' );
        wp_enqueue_style( 'style', get_stylesheet_uri() );

        /**
         * Enqueue Javascript.
         */
        wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.5.1.slim.min.js',  [ ], 3.5, false );
        wp_enqueue_script( 'popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js',  [ 'jquery-js' ], 1.16, false );
        wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js',  [ 'popper', 'jquery-js' ], 4.6, true );
        wp_enqueue_script( 'main', GEM_DIR_URI . '/assets/js/main.js', [ 'bootstrap', 'jquery-js' ], filemtime( GEM_DIR_PATH . '/assets/js/main.js'), true );
    }

    add_action( 'wp_enqueue_scripts', 'gem_enqueue_scripts_and_styles' );
}

/**
 * Register menus.
 * 
 */
if ( ! function_exists( 'gem_register_menus' ) ) {

    function gem_register_menus() {
        register_nav_menus([
            'header' => __( 'Header menu', 'gem' ),
            'footer' => __( 'Footer menu', 'gem' ),
        ]);
    }

    add_action( 'init', 'gem_register_menus' );
}

/**
 * Create new post types.
 * 
 * - policy brief
 * - article
 * 
 */
if ( ! function_exists( 'gem_register_post_types' ) ) {

    function gem_register_post_types() {

        $plural = 'Policy Briefs';
        $singular = 'Policy Brief';

        $policybrief = array(
            'name'                 => _x( $plural, 'Post type general name', 'gem' ),
            'singular_name'        => _x( $singular, 'Post type singular name', 'gem' ),
            'menu_name'            => _x( $plural, 'Admin Menu text', 'gem' ),
            'name_admin_bar'       => _x( $singular, 'Add New on Toolbar', 'gem' ),
            'add_new'              => _x( 'Add New ' . $singular, 'gem' ),
            'add_new_item'         => _x( 'New ' . $singular, 'gem' ),
            'edit_item'            => _x( 'Edit ' . $singular, 'gem' ),
            'view_item'            => __( 'View ' . $singular, 'gem' ),
            'all_items'            => __( 'All ' . $plural, 'gem' ),
        );

        register_post_type( 'policybrief', array(
            'labels'        => $policybrief,
            'description'   => 'New post types for GEM.',
            'public'        => true,
            'supports'      => array( 'title', 'editor', 'revisions', 'author', 'post-formats', 'thumbnail' ),
            'taxonomies'    => array( 'category', 'post_tag' ),
        ) );

        unset($plural);
        unset($singular);

        $plural = 'Articles';
        $singular = 'Article';

        $article = array(
            'name'                 => _x( $plural, 'Post type general name', 'gem' ),
            'singular_name'        => _x( $singular, 'Post type singular name', 'gem' ),
            'menu_name'            => _x( $plural, 'Admin Menu text', 'gem' ),
            'name_admin_bar'       => _x( $singular, 'Add New on Toolbar', 'gem' ),
            'add_new'              => _x( 'Add New ' . $singular, 'gem' ),
            'add_new_item'         => _x( 'New ' . $singular, 'gem' ),
            'edit_item'            => _x( 'Edit ' . $singular, 'gem' ),
            'view_item'            => __( 'View ' . $singular, 'gem' ),
            'all_items'            => __( 'All ' . $plural, 'gem' ),
        );

        register_post_type( 'article', array(
            'labels'                => $article,
            'description'           => 'New post types for GEM.',
            'public'                => true,
            'supports'              => array( 'title', 'editor', 'revisions', 'author', 'post-formats', 'thumbnail' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
        ) );
        
    }

    add_action( 'init', 'gem_register_post_types' );
}

/**
 * Create new categories.
 * 
 * - Blue Finance
 * - Clima e Meio Ambiente
 * - Conceitos e Métodos
 * - Construção e Reparação Naval
 * - Defesa e Segurança
 * - Energias Offshore
 * - Minerais Offshore
 * - Pesca e Aquicultura
 * - Relações Geopolíticas
 * - Relações Sociais
 * - Transporte e Infraestrutura
 * - Turismo, Esporte e Lazer
 * 
 */
if ( ! function_exists( 'gem_register_categories' ) ) {

    function gem_register_categories() {
        $new_categories = [
            'Blue Finance'                  => 'blue-finance',
            'Clima e Meio Ambiente'         => 'clima-meio-ambiente',
            'Conceitos e Métodos'           => 'conceito-metodo',
            'Construção e Reparação Naval'  => 'construcao-reparacao-naval',
            'Defesa e Segurança'            => 'defesa-seguranca',
            'Energias Offshore'             => 'energias-offshore',
            'Minerais Offshore'             => 'minerais-offshore',
            'Pesca e Aquicultura'           => 'pesca-aquicultura',
            'Relações Geopolíticas'         => 'relacoes-geopoliticas',
            'Relações Sociais'              => 'relacoes-sociais',
            'Transporte e Infraestrutura'   => 'transporte-infraestrutura',
            'Turismo, Esporte e Lazer'      => 'turismo-esporte-lazer'
        ];

        foreach($new_categories as $name => $slug) {
            wp_insert_term( $name, 'category', [ 'slug' => $slug ] );
        }
        
    }

    add_action( 'init', 'gem_register_categories' );
}
?>