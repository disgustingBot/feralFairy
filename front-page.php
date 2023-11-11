<?php get_header(); ?>


<?php while(have_posts()){the_post(); ?>
    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>
