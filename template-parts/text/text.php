<section class="container">
  <?php if( get_sub_field('position') == 'Left' ):?>
    <article class="gen-text" id="text-left">
      <?php the_sub_field('content_text');?>
    </article>
  <?php endif;?>

  <?php if( get_sub_field('position') == 'Centered' ):?>
    <article class="gen-text" id="text-centered">
      <?php the_sub_field('content_text');?>
    </article>
  <?php endif;?>

  <?php if( get_sub_field('position') == 'Right' ):?>
    <article class="gen-text" id="text-right">
      <?php the_sub_field('content_text');?>
    </article>
  <?php endif; ?>
</section>
