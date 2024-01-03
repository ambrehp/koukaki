<?php
$args = array(
    'post_type' => 'characters',
    'posts_per_page' => -1,
    'meta_key'  => '_main_char_field',
    'orderby'   => 'meta_value_num',

);
$characters_query = new WP_Query($args);
?>
<article id="characters">
    <div class="main-character fadeInUp">
        <h3 class="fade-in-text">Les personnages</h3>
        <swiper-container effect="coverflow" grab-cursor="true" centered-slides="false" slides-per-view="auto" coverflow-effect-rotate="70" coverflow-effect-stretch="0" coverflow-effect-depth="100" coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false">
            <swiper-slide>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Kawaneko.png'; ?> " alt="Kawaneko" /><span>Kawaneko</span>
            </swiper-slide>
            <swiper-slide>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Orenjiiro-1.png'; ?> " alt="Orenjiiro" /><span>Orenjiiro</span>
            </swiper-slide>
            <swiper-slide>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Pinku-1.png'; ?> " alt="Pinku" /><span>Pinku</span>
            </swiper-slide>
            <swiper-slide>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Tenshi-1.png'; ?> " alt="Tenshi" /><span>Tenshi</span>
            </swiper-slide>
            <swiper-slide>
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Jaakuna-1.png'; ?> " alt="Jaakuna" /><span>Jaakuna</span>
            </swiper-slide>

        </swiper-container>
    </div>
</article>