<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>



<main>


    <div class="h1_bg">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="big_cap mb_40">
        <?php the_content(); ?>
    </div>

</main>

<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
