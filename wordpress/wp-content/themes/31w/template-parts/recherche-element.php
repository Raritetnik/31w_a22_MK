<?php

$le_permalien = " <a href='" . get_the_permalink() . "'> &#8594; </a>";
?>
<article class="grille__article-recherche">
    <div class="article__img"><?php the_post_thumbnail('thumbnail') ?></div>
    <div class="acticle__detail">
        <h5><?php  the_title();  ?></h5>
        <p><?= wp_trim_words(get_the_excerpt(), 100,$le_permalien) ; ?>
        <?= $le_permalien ?></p>
    </div>
</article>