    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo thumb_show( get_the_content() ) ?></a>
    <div class="masker"></div>
    <div class="detail">
        <h2>- <?php the_title()?> -</h2>
        <p><?php echo get_the_date('Y-m-d');?></p>
    </div>
