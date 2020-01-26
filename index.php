<!-- On appelle le header -->
<?php get_header(); ?>

<!-- C'est ici qu'on mettra le contenu du site, comme par exemple la boucle wordpress -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

<?php endwhile; endif; ?>

<!-- On appelle le footer -->
<?php get_footer(); ?>