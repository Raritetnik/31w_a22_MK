<?php
/**
 * Template Name: evenement
 *
 * @package WordPress
 * @subpackage 31w
 *
 */

 get_header();
?>

<main class="site__main">
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <h1 class="post__titre"><?php the_title() ?></h1>
     <p><?php the_content() ?></p>
     <p>Adresse: <?php the_field('adresse') ?></p>
     <p>Date et heure: <?php the_field('date_heure') ?></p>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>