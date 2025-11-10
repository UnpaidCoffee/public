<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="page-header">
    <?php if ( has_post_thumbnail() ) : ?>
      <div class="featured-image">
        <?php the_post_thumbnail( 'large' ); ?>
        <h1><?php the_title(); ?></h1>
      </div>
    <?php else : ?>
      <h1><?php the_title(); ?></h1>
    <?php endif; ?>
  </div>

  <div class="page-content">
    <?php the_content(); ?>
    <div class="post-content">
      <h2><?php the_title(); ?></h2>
    </div>
  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>