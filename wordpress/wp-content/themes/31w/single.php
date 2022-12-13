
<?php
/**
 * Tenplate name: Evenement
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore - template
 */
?>
<?php get_header(); ?>

    <main class="site__main">
    <?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
			<div class="carte__info">
				<h1 class="acticle__titre"><?= get_the_title(); ?></h1>
				<?php the_content(); ?>
			</div>
		<?php endif;?>
    </main>

<?php get_footer(); ?>
</html>






