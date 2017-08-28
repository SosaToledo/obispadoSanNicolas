<?php
get_header();
while ( have_posts() ) : the_post();
the_content();
?>
<?php
endwhile; // End of the loop.
?>
