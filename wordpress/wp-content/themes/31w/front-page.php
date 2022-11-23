
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>
<!-- h1 class="trace">front-page.php</h1 -->
<?php get_header(); ?>
    <main class="site__main">
    <?php
    wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav",
        "container_class" => "menu__evenement"
    ));?>
		<section class="grille"><?php
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post(); ?>

                    <?php
                    $mes_categories = get_the_category();
                    if(in_category('galerie')): ?>
                        <article class="grille__galerie">
                            <h6><?= get_the_title(); ?></h6>
                            <?php the_content() ?>
                        </article>
                    <?php else: ?>
                        <article class="grille__article">
                            <h6><?= get_the_title(); ?></h6>
                            <?php $le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>"; ?>
                            <p><?= wp_trim_words(get_the_excerpt(), 20,$le_permalien) ; ?></p>
                            <p>Type de cours: <?php the_field("type_cours")?></p>
                            <p>TIM - Collège de Maisonneuve</p>

                        </article>
                    <?php endif;
                endwhile;
            endif;?>
        </section>
    </main>
<?php get_footer(); ?>
</html>






