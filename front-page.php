<?php get_header(); ?>

<?php

if( have_rows('content_builder') ):
  while ( have_rows('content_builder') ) : the_row();

    //banner
    if( get_row_layout() == 'banner' ):
      //load template part
      get_template_part('template-parts/banner');

    //intro
    elseif( get_row_layout() == 'intro' ):
      //load template part
      get_template_part('template-parts/intro');
    
    endif;
  endwhile;
else :
    // Do something...
endif;
?>


<?php get_footer(); ?>
