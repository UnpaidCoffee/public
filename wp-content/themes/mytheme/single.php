<? get_header(); ?>

<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
    <?php if ( has_post_thumbnail() ) : ?>
    <figure class="blog-thumbnail">
        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid' ) ); ?>

        <?php if ( get_the_post_thumbnail_caption() ) : ?>
        <figcaption class="blog-caption">
            <?php echo get_the_post_thumbnail_caption(); ?>
        </figcaption>
        <?php endif; ?>
    </figure>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="blog-text">
                <div class="author-info">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 48 ); ?>
                    <p class="written-by">Written by: <?php the_author(); ?></p>
                    <p class="date-posted">On: <?php echo post_time(); ?></p>
                </div>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; endif; ?>
<? get_footer(); ?>