<?php 
get_header();
?>

<?php
if (have_posts () ) : while (have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="post-style">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail('large');
                    } ?>
                    <div class="post-content">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <p class="date-posted">Posted: <?php echo post_time();?></p>
                    </div>
                </div>
            </a>
        </div>
     </div>
     <?php endwhile; endif; ?>
<?php 
get_footer();
?>