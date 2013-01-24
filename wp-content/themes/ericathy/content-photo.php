    <a href="<?php the_permalink(); ?>" rel="bookmark"><?=thumb_show( get_the_content() ) ?></a>
    <div class="masker"></div>
    <div class="detail">
        <h2><?php the_title()?></h2>
        <p><?=get_the_date('Y-m-d');?></p>
    </div>
