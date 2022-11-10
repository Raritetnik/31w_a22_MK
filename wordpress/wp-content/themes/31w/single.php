
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
<?php get_header(); ?>

    <main class="site__main">
    <code>single.php</code>
    <?php
		if ( have_posts() ) :
            while ( have_posts() ) :
				the_post();
                ?>
                <div class="cart-post">
                <?php
                the_title('<h2 class="post__titre">','</h2>');
                the_content(null, true);?>
                    <div class="post-details">
                        <p><?php the_weekday(); ?> <?= get_the_time(); ?></p>
                        <p>Catégorie: <?php the_category(); ?></p>
                    </div>
                    <div class="post-details">
                        <p>Date: <?= get_the_date() ?></p>
                        <p>Auteur: <?php the_author() ?></p>
                    </div>
                </div>
                <?php




            endwhile;
        endif;
    ?>
    </main>

<?php get_footer(); ?>
</html>






