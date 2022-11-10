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
     <h1>---- page.php ------</h1>
     <?php if (have_posts()): while(have_posts()): the_post(); ?>
     <?php the_title() ?>
     <?php the_content() ?>
     <?php the_field('adresse') ?>
     <?php the_field('date_evenement') ?>
     <?php endwhile ?>
     <?php endif ?>
</main>
<?php get_footer() ?>