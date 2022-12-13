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

<?php
// Quantité de resultats de recherche
global $wp_query;
$total_results = $wp_query->found_posts;?>
<!-- h1 class="trace">front-page.php</h1 -->
<?php get_header(); ?>
    <main class="site__main">
        <div class="titre__section-recherche">
            <h2>Résultat de la recherche</h2>
            <p>Elément de recherche: « <?= get_query_var('s') ?> »</p>
        </div>
		<section class="grille"><?php
            if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    get_template_part('template-parts/recherche-element', '');
                endwhile;
            endif;?>
        </section>
        <div class="nbr__elements"><p>Nombre de résultat: <?= $total_results ?></p></div>
    </main>
<?php get_footer(); ?>
</html>