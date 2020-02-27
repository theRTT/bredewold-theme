<!-- banner -->
<section id="standard-banner" style="background-image:url('<?php the_sub_field('banner_image');?>');">
  <!-- banner title -->
  <h1><?php the_sub_field('banner_title');?></h1>
  <!-- banner buttons -->
  <div id="banner-buttons">
    <?php if( have_rows('banner_buttons') ): while( have_rows('banner_buttons') ): the_row(); ?>
      <a href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a>
    <?php endwhile; endif; ?>
  </div>
</section>
