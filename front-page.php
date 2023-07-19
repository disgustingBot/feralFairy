<?php get_header(); ?>

<div class="hero">
    <figure class="Element hero_card">
        <img class="hero_img" src="<?= get_template_directory_uri() ?>/assets/snow_day.jpg" alt="">
        <figcaption class="hero_caption">
            <h3 class="hero_title">Project woodyard</h3>
            <p class="hero_txt">
                WoodYard est une équipe de l'Auberge des Migrants chargée de couper, préparer et distribuer le bois aux personnes exilées de Calais et Grande-Synthe.
            </p>
            <a href="" class="hero_button">Find out more</a>
        </figcaption>
    </figure>
</div>



<section class="abstract">
    <h1 class="abstract_title">L’Auberge des Migrants</h1>
    <p class="abstract_text">
        Since 2008, L’Auberge Des Migrants has been working with refugees and displaced people in Calais and Northern France, providing food and material assistance, support and advocacy. Our objective is to provide emergency material aid, but also to fight to promote the dignity of people in exile, through our actions.
    </p>
</section>



<section class="perks">
        <div class="perk">
            <h4 class="perk_title">Logistics</h4>
            <p class="perk_text">Our Calais warehouse is the largest humanitarian platform in the region.</p>
        </div>
        <div class="perk">
            <h4 class="perk_title">Food and material aid</h4>
            <p class="perk_text">Meals, food items, wood and clothing are all distributed from our warehouse.</p>
        </div>
        <div class="perk">
            <h4 class="perk_title">Support</h4>
            <p class="perk_text">We give our support to displaced people, volunteers and other organisations.</p>
        </div>
        <div class="perk">
            <h4 class="perk_title">Protecting the rights of displaced people</h4>
            <p class="perk_text">Project HRO was set up to observe evictions in the area.</p>
        </div>
</section>



<section class="cats">
    <figure class="cat">
        <img class="cat_img rowcol1" src="<?= get_template_directory_uri() ?>/assets/je_donne_img.jpg" alt="">
        <figcaption class="cat_caption rowcol1">
            <p class="cat_text">Donate</p>
            <p class="cat_button">Donate now</p>
        </figcaption>
    </figure>
    <div class="cat">
        <img class="cat_img rowcol1" src="<?= get_template_directory_uri() ?>/assets/member_img.jpg" alt="">
        <figcaption class="cat_caption rowcol1">
            <p class="cat_text">Become a Member</p>
            <p class="cat_button">Join today</p>
        </figcaption>
    </div>
</section>



<section class="book">
    <div class="book_main">
        <h3 class="book_title">Le Live de la Jungle</h3>
        <p class="book_description">
            If you want to learn more about The Jungle, “Le Live de la Jungle” features 39 testimonies from volunteers who participated in the construction and life of what was the largest migrant camp in Europe, with more than 10,000 inhabitants in September 2016.
        </p>
    </div>
    <img class="book_image" src="<?= get_template_directory_uri() ?>/assets/le_livre.jpg" alt="">
    <div class="book_order">
        <p class="book_cat">Order the book</p>
        <p class="book_how">
            To order the book, <a href="https://www.helloasso.com/associations/l-auberge-des-migrants/paiements/le-livre-de-la-jungle">click here</a> or send us a check for €26 (€20 + €6 shipping costs, may vary outside France + packaging) to L’Auberge des Migrants, BP 70113, 62100 Calais Cedex.
            <br>
            <br>
            For other means of payment, contact us on:
            <br>
            <b>tel:</b> 06 78 02 05 32
            <br>
            <b>email:</b> contact@laubergedesmigrants.fr
        </p>
    </div>
</section>



<section class="news">
    <p class="news_title">Subscribe to our newsletter</p>
    <form class="news_form" action="">
      <p class="news_expla">Your contact data:</p>
      <input type="text" class="news_input" placeholder="Name">
      <input type="email" class="news_input" placeholder="Email">
      <button class="news_button">Subscribe!</button>
    </form>
    <img class="news_image" src="<?= get_template_directory_uri() ?>/assets/newsletter.jpg" alt="">
</section>


<?php get_footer(); ?>
