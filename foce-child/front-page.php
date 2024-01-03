<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner parallax-item">
        <!-- Ajout de la vidéo dans le header -->
        <video class="video-bg" width="1440" autoplay loop muted poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png'; ?>">
            <source src="<?php echo get_stylesheet_directory_uri() . '/assets/videos/Studio-Koukaki-video-header.mp4'; ?>" type="video/mp4">
        </video>
        <img class="fadeInUp imglogo floating" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
    </section>
    <section id="#story" class="story title-fadeInUp">
        <h2 class="fade-in-text">L'histoire</h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <!-- Section personnages dans template-parts\characters-slider.php -->
        <?php get_template_part('template-parts/characters-slider'); ?>

        <article id="place" class="fadeInUp">
            <img class="littleCloud" src="<?php echo get_template_directory_uri() . '-child/assets/images/little_cloud.png'; ?>" alt="Petits nuages">
            <img class="bigCloud" src="<?php echo get_template_directory_uri() . '-child/assets/images/big_cloud.png'; ?>" alt="Gros nuages">
            <div>
                <h3 class="fade-in-text">Le Lieu</h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>

        </article>
    </section>


    <section id="studio" class="fadeInUp">
        <h2 class="fade-in-text">Studio Koukaki</h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <!-- Section oscar dans template-parts\section-oscar.php -->
    <?php get_template_part('template-parts/section-oscar'); ?>

</main><!-- #main -->
<?php
get_footer();
?>