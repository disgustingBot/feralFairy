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

<!-- <section class="volta_holder">

  <form  class="volta" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
    <input type="hidden" name="action"   value="lt_form_handler">
    <input type="hidden" name="link"     value="<?php echo home_url( $wp->request ); ?>">
    <input type="text"   name="a00"      value="" placeholder="jeje" hidden>

    <label class="voltaLabel">Tell us about you!</label>
    <input class="voltaInput" type="text" name="first_name" placeholder="Fisrt Name" required>
    <input class="voltaInput" type="text" name="last_name"  placeholder="Last Name"  required>
    <input class="voltaInput" type="email"  name="email"    placeholder="Email"      required>
    <input class="voltaInput" type="number" name="phone"    placeholder="Phone">
    <textarea class="voltaInput" name="comment"  placeholder="Comments"></textarea>



    <div class="voltaTermsAndConditions">
      <input name="acceptance" type="checkbox" required>
      <a href="<?php echo site_url('terms-conditions'); ?>" target="_blank" class="linkTermAndConditionsForm" rel="noopener noreferrer">I accept terms and conditions</a>
    </div>

    <button class="header_CTA" type="submit" name="submit" value="true">SEND</button>

  </form>

</section> -->


<?php get_footer(); ?>
