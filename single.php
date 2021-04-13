<?php get_header(); ?>


<?php if (have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
    <div class="page-title">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="content-wrapper">
        <div class="background">
            <div class="content">
                <?php the_content(); ?>
            </div>
            <div class="link-wrapper">
                <div class="previous">
                    <?php previous_post_link('<i class="fas fa-chevron-left"></i>  %link'); ?>
                </div>
                <div class="next">
                    <?php next_post_link('%link  <i class="fas fa-chevron-right"></i>"'); ?>
                </div>
            </div>
        </div>  
    </div>
<?php endwhile; ?>
<?php endif; ?>
<?php 
// get_sidebar('archive'); 
?>
<!-- <ul> -->
    <?php
    // $arcArray = array(
    //     'type'=>'monthly',
    // );
    // wp_get_archives($arcArray);
    ?>
<!-- </ul> -->
<?php get_footer(); ?>
