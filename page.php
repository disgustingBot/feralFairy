<?php get_header(); ?>


<section class="abstract">
    <h1 class="abstract_title"><?=get_the_title()?></h1>
        
    <p class="abstract_text">
        <?=get_the_excerpt()?>
    </p>
</section>


<?php while(have_posts()){the_post(); ?>
    <section class="main">
        <?php the_content(); ?>
    </section>
<?php } ?>


<?php get_footer(); ?>
