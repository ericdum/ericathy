<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post();?>

        <?php $cat = array_pop(get_the_category())?>
        <article id="post-<?php the_ID(); ?>" class="<?php echo $cat->slug?>">
            <?php get_template_part( 'content', $cat->slug ); ?>
        </article>

    <?php endwhile; ?>

<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
