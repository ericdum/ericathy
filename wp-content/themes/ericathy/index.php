<?php get_header(); ?>

<?php if ( false && have_posts() ) : ?>

    <?php /* Start the Loop */ ?>
    <?php while ( have_posts() ) : the_post();?>

        <article id="post-<?php the_ID(); ?>">
            <?php get_template_part( 'content', 'text' ); ?>
        </article>

    <?php endwhile; ?>

<?php else : ?>
<?php endif; ?>

<?php get_footer(); ?>
