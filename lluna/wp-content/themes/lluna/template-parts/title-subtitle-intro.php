<header id="intro">

    <?php
    
        if ( is_home() )
        {
            $id = get_option ( 'page_for_posts' );
        }
        else
        {
            $id = get_the_ID();
        }

    ?>

    <h1><?php echo get_the_title ( $id ); ?> <span><?php the_field ( 'page_subtitle', $id ); ?></span></h1>
    <p><?php the_field ( 'page_intro', $id ); ?></p>

</header>