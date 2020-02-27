<!-- slider banner -->
<section id="slider-banner" class="swiper-container">
  <?php if( have_rows('slider') ): ?>
    <div class="swiper-wrapper">
     	<?php while ( have_rows('slider') ) : the_row();?>
        <!-- slide -->
        <div class="swiper-slide">
          <div class="image" style="background-image:url('<?php the_sub_field('slide_image'); ?>');"></div>
          <div class="slide-content">
          </div>
        </div>
      <?php endwhile; else : ?>
    </div>
  <?php endif; ?>
</section>
