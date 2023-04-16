<?php get_header(); the_post(); ?>

    <header>

        <div class="flex-section outstanding-img"><?php the_post_thumbnail ( 'large' ); ?></div>

    </header>

    <main>
        
        <?php the_content(); ?>

    </main>

<?php get_footer(); ?>