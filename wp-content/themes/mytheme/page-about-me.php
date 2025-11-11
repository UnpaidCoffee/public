<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="container about-me-page">
  <div class="row">
    <?php if ( has_post_thumbnail() ) : ?>
      <figure class="self-portrait col-6">
        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
      </figure>
    <?php endif; ?>

    <div class="about-me-text col-6">
        <?php the_content(); ?>
      </div>
    </div>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>