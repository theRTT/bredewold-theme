<section>
  <div class="standard-post">
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

      <?php the_title();?>

    <?php endwhile;
      wp_reset_postdata();
      else : ?>
      <p><?php _e( "Geen content gevonden.."); ?></p>
    <?php endif; ?>
  </div>
</section>
