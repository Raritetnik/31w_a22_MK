
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
    <?php
	wp_nav_menu(array(
        "menu" => "evenement",
        "container" => "nav",
        "container_class" => "menu__evenement"
    ));
		if ( have_posts() ) :
			/* Start the Loop */
			?>
			<div class="grille">
			<?php
			while ( have_posts() ) :
				the_post();
				$titre = get_the_title();
				$code_cours = substr($titre,0,7);
				$heure_cours = substr($titre,strrpos($titre,'('));
				$titre = substr($titre,8);
				$longueur = strlen($titre);

				//$titre = substr($titre, strrpos($titre,'(') - strlen($titre));
				$titre = substr($titre, 0, strrpos($titre,'(') - strlen($titre));
				?>
			<!--<header>
				<h1><?= $titre  ?></h1>
				<code>Sigle du cours<?= $code_cours  ?></code>
				<code>Nombre d'heures<?= $heure_cours  ?></code>
			</header>-->


			<?php
			$le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>";
			?>
			<div class="cart-post">
                    <h1><a class='post__titre' href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a></h1>
                    <p>Desription:
						<?= get_the_excerpt();?>
					<?= wp_trim_words(get_the_excerpt(),5, $le_permalien); ?></p>
                    <div class="post-desc">
                        <p>Sigle du cours: <?= the_field('code_cours') ?></p>
                        <p>Durée de cours: <?php the_field('duree_cours') ?> heures</p>
                        <p>Type de cours: <?php the_field('type_cours') ?></p>
                    </div>
                    <div class="post-details">
                        <p>Date: <?= get_the_date() ?></p>
                        <p>Auteur: <?php the_author() ?></p>
                    </div>
                </div>
<?php
            endwhile; ?>
			</div>
        <?php endif; ?>

    </main>
<?php get_footer(); ?>
</html>






