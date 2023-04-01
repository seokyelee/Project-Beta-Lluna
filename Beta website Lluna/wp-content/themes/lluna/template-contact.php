<?php /* Template name: Contact */ ?>

<?php get_header(); the_post(); ?>

 <!-- MAIN -->

 <main>

    <!-- CONTACT -->

    <section id="contact">

        <?php get_template_part ( 'template-parts/title-subtitle-intro' ); ?>

        <!-- FORM -->

        <?php the_content(); ?>

    </section>

    </main>

<?php get_footer(); ?>