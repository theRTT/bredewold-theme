
<?php

if( have_rows('posts') ):
  while ( have_rows('posts') ) : the_row();

    //banner
    if( get_row_layout() == 'standard_posts' ):
      //load template part
      get_template_part('template-parts/posts/types/standard-posts');

    //slider banner
    elseif( get_row_layout() == 'masonry_posts' ):
      //load template part
      get_template_part('template-parts/posts/types/masonry-posts');

    endif;
  endwhile;
else :
    // Do something...
endif;

?>
