<article class="grille__article">
    <h6><?= get_the_title(); ?></h6>
    <?php $le_permalien = "<a href='" . get_the_permalink() . "'>Suite</a>"; ?>
    <p><?= wp_trim_words(get_the_excerpt(), 20,$le_permalien) ; ?></p>
    <p>Type de cours: <?php the_field("type_cours")?></p>
    <p>TIM - Collège de Maisonneuve</p>

</article>