<section class="masonry-post-wrapper">
  <div class="container">
    <div class="masonry-post-inner">
      <?php

        $amount = get_sub_field('amount');
        $type = get_sub_field('post_type');

        $args = array(
        'post_type' => 'post',
        'posts_per_page' => $amount,
        'category__in' => $type,
        );
      ?>
      <?php $query = new WP_Query($args); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="#">
          <div class="post">
            <?php $thumbnail = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
            <div class="thumbnail" style="background-image:url('<?php echo $thumbnail; ?>');"></div>
            <div class="post-info">
              <h3><?php the_title();?></h3>
              <span>read more</span>
            </div>
          </div>
        </a>
      <?php endwhile;
        wp_reset_postdata();
        else : ?>
        <p><?php _e( "Geen content gevonden.."); ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>
