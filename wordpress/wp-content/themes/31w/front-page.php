
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
    ));
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();

                $titre = get_the_title();?>
                <article class="grille__article">
                    <h6><?= get_the_title()?></h6>
                    <p>--------------------------------------------</p>
                    <?php echo("<h2>BRUG: ".is_category('galerie')."</h2>");
                    if (in_category('Galerie')) {

                    }?>
                </article>


                <div class="cart-post">
                    <h1><a class='post__titre' href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h1>
                    <p>Desription: <?php the_content(null, true); ?></p>
                    <div class="post-desc">
                        <p>Sigle du cours: <?= the_field('code_cours') ?></p>
                        <p>Durée de cours: <?php the_field('duree_de_cours') ?> heures</p>
                        <p>Type de cours: <?php the_field('type_de_cours') ?></p>
                    </div>
                    <div class="post-details">
                        <p>Date: <?= get_the_date() ?></p>
                        <p>Auteur: <?php the_author() ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </main>
<?php get_footer(); ?>
</html>






