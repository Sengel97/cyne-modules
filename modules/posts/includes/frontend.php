<div class="cyne-module-posts"><?php

$posts = get_posts( array(
    'posts_per_page' => -1,
    'post_type' => 'post'
) );
 
if ( $posts ) {
    foreach ( $posts as $post ) {
        setup_postdata( $post ); 
        ?>
        
        <h2 class="post-title"><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h2>
        
        <div class="post-content"><?php the_content(); ?></div>

        <a class="btn btn-primary" href="<?php echo $post->guid; ?>"><?php echo __('Read more', 'cyne'); ?></a>

        <?php
    }
    wp_reset_postdata();
}

?></div>