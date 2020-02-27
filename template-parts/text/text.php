<?php

if( have_rows('text') ):
  while ( have_rows('text') ) : the_row();

    //banner
    if( get_row_layout() == 'centered_text' ):
      //load template part
      get_template_part('template-parts/text/types/centered-text');

    //slider banner
    elseif( get_row_layout() == 'slider_banner' ):
      //load template part
      get_template_part('template-parts/banner/types/slider');

    endif;
  endwhile;
else :
    // Do something...
endif;

?>
