<div class="button-wrapper">
  <?php if( have_rows('buttons') ): while( have_rows('buttons') ): the_row(); ?>
    <a class="reg-btn" href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a>
  <?php endwhile; endif; ?>
</div>
