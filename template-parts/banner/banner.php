
<?php

if( have_rows('banner') ):
  while ( have_rows('banner') ) : the_row();

    //banner
    if( get_row_layout() == 'standard_banner' ):
      //load template part
      get_template_part('template-parts/banner/types/standard-banner');

    //slider banner
    elseif( get_row_layout() == 'slider_banner' ):
      //load template part
      get_template_part('template-parts/banner/types/slider-banner');

    endif;
  endwhile;
else :
    // Do something...
endif;

?>
