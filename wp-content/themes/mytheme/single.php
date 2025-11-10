<? get_header(); ?>
<div style="background-color: #fff;">
<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
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

            <div class="blog-text">
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>
<? get_footer(); ?>