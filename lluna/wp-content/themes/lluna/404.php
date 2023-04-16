<?php get_header( '404' ); ?>
    
    <h1>            
        <a href="<?php echo home_url(); ?>">

            <?php echo wp_get_attachment_image ( get_field ('options_404_image', 'option'), '', '', array ( 'class' => 'round' ) ); ?>

            <?php _e ( '404' , 'lluna'); ?>

        </a>

    </h1>

<?php get_footer( '404' ); ?>
