<?php

if( have_rows('text') ):
  while ( have_rows('text') ) : the_row();

    //center aligned
    if( get_row_layout() == 'centered_text' ):
      //load template part
      get_template_part('template-parts/text/types/centered-text');

    //right aligned
    elseif( get_row_layout() == 'right_text' ):
      //load template part
      get_template_part('template-parts/text/types/right-text');

    //left aligned
    elseif( get_row_layout() == 'left_text' ):
      //load template part
      get_template_part('template-parts/text/types/left-text');

    endif;
  endwhile;
else :
    // Do something...
endif;

?>
