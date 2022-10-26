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

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();?>
				<div class="publication">
					<h2 class="pub__titre"><?= the_title() ?></h2>
					<blockquote><?= the_content();
					$linkHTML = "... <a href='".get_the_permalink()."'>lire la suite</a>"; ?>
					<?php the_excerpt(); ?>
					<?= wp_trim_words(get_the_excerpt(),3,$linkHTML) ?></blockquote>

					<div class="boite-info">
						<p><?= get_the_date(); ?></p>
						<p><?= get_the_permalink(); ?></p>
					</div>
				</div>
<?php			endwhile;
		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
