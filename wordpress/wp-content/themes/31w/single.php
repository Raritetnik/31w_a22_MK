
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
				the_post();
				/*the_post_thumbnail('thumbnail');
				the_post_thumbnail('medium');
				the_post_thumbnail('large'); ?>
				the_post_thumbnail();*/ ?>
			<article class="carte">
				<h1 class="carte__titre"><?= get_the_title(); ?></h1>
				<div class="cart__contenu">
					<?php the_content(); ?>
				</div>
			</article>
			<?php endif;
		?>
    </main>

<?php get_footer(); ?>
</html>






