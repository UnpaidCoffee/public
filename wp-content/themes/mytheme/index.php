<?php 
get_header();
?>

<?php if ( have_posts() ) : ?>
  <div class="container py-5">
    <div class="row g-4">
      <?php 
        $post_count = 0;
        while ( have_posts() ) : the_post(); 
          $post_count++;
      ?>

        <?php if ( $post_count === 1 ) : ?>
          <!-- 🎯 First (latest) post, full width -->
          <div class="post-style col-12">
            <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>
              <?php endif; ?>
              <div class="post-content">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <p class="date-posted">Posted: <?php echo post_time(); ?></p>
              </div>
            </a>
          </div>

        <?php else : ?>
          <!-- 🧱 All other posts, 3 per row -->
          <div class="post-style col-12 col-md-3">
            <a href="<?php the_permalink(); ?>">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'medium_large', array( 'class' => 'img-fluid' ) ); ?>
              <?php endif; ?>
              <div class="post-content">
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
                <p class="date-posted">Posted: <?php echo post_time(); ?></p>
              </div>
            </a>
          </div>
        <?php endif; ?>

      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

<?php 
get_footer();
?>