<?php get_header(); ?>

<?php

if( have_rows('content_builder') ):
  while ( have_rows('content_builder') ) : the_row();

    //banner
    if( get_row_layout() == 'banner' ):
      //load template part
      get_template_part('template-parts/banner/banner');

    //text
    elseif( get_row_layout() == 'text' ):
      //load template part
      get_template_part('template-parts/text/text');

    endif;
  endwhile;
else :
    // Do something...
endif;
?>


<?php get_footer(); ?>
