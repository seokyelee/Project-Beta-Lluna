<?php

//  SCRIPTS Y CSS

    function my_scripts_and_css()
    {
        if ( ! is_admin() )
        {  
            if ( is_page ( 'Contact' ) )
            {
                wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/main.js', '', '', true );
            }

            wp_enqueue_style ( 'css-main', get_stylesheet_uri(), '', filemtime ( get_template_directory() . '/style.css' ) );

        }        

    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css' );



//  CONFIGURACIÓN DEL TEMA

    function my_theme_setup()
    {
        // Añadir soporte para...

        add_theme_support ( 'title-tag' );
        add_theme_support ( 'post-thumbnails' );
        add_theme_support ( 'woocommerce' );
        add_theme_support ( 'wc-product-gallery-zoom' );
        add_theme_support ( 'wc-product-gallery-lightbox' );
        add_theme_support ( 'wc-product-gallery-slider' );

        // Registrar ubicaciones de menús...

        //  REGISTRO DE MENÚS

        register_nav_menu ( 'header-menu', 'Cabecera del sitio' );
        register_nav_menu ( 'footer-menu-left', 'Pie de página a la izquierda' );
        register_nav_menu ( 'footer-menu-right', 'Pie de página a la derecha' );
    }

    add_action ( 'after_setup_theme', 'my_theme_setup' );



//  MÁS STUFF

    // Arrasar los estilos de WooCommerce

    //add_filter ( 'woocommerce_enqueue_styles', '__return_false' );





    add_filter( 'wc_product_sku_enabled', '__return_false' );
    // remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40, 0 );

 
// Remove hover Zoom

    function remove_image_zoom_support() {
        remove_theme_support( 'wc-product-gallery-zoom' );
    }
    add_action( 'wp', 'remove_image_zoom_support', 100 );






    /** 
* Modificaciones a menu de mi cuenta 
*/
function my_account_menu_order() {
    $menuOrder = array(
        'orders'             => __( 'Tus pedidos', 'woocommerce' ),
        'downloads'          => __( 'Tus descargas', 'woocommerce' ),
        'edit-address'       => __( 'Direcciones', 'woocommerce' ),
        'edit-account'    => __( 'Mis datos', 'woocommerce' ),
        'customer-logout'    => __( 'Salir', 'woocommerce' ),
       'dashboard'          => __( 'Inicio', 'woocommerce' ),
    );
    return $menuOrder;
}
add_filter ( 'woocommerce_account_menu_items', 'my_account_menu_order' );



/* Unificando contenido de pestañas */
// Primero ocultamos la pestaña a mover (edit-address en este ejemplo)
 
add_filter( 'woocommerce_account_menu_items', 'ayudawp_mover_direcciones', 999 );
  
function ayudawp_mover_direcciones( $items ) {
unset($items['edit-address']);
return $items;
}
 
// Luego mostramos el contenido de las direcciones en otra pestaña (edit-account en este ejemplo)
 
add_action( 'woocommerce_account_edit-account_endpoint', 'woocommerce_account_edit_address' );



?>