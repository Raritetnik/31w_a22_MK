
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
    <code>single.php</code>
    <?php
		if ( have_posts() ) :
			/* Start the Loop */
				the_post(); ?>
				<?php the_post_thumbnail('thumbnail'); ?>
				<?php the_post_thumbnail('medium'); ?>
				<?php the_post_thumbnail('large'); ?>
				<?php the_post_thumbnail(); ?>
			<h1><?= get_the_title(); ?></h1>
			<?php the_content();
			endif;
		?>
    ?>
    </main>

<?php get_footer(); ?>
</html>






