<?php get_header();
include "menu.php";
	?>
	<div class="contenedorHomiliasCat">
	<h1>Homilias</h1>
	<?php
	// obispoActual id 30 -Frank
	//id  -web
	query_posts('cat=30');
		if ( have_posts() ) {
			while ( have_posts() ) {
				?>
				<div><img src="<?php bloginfo(template_url);?>/img/iconos/mp3-icon.png" alt=""><div class="homilias">
				<?php
				the_post();
				echo "<p>";the_title();echo "</p>";
				the_content();?>
				</div></div>
				<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
				<?php } // end while
		} else {
			echo '<h1> No hay homilias que mostrar </h1>';// end if
		}
?></div><?php
get_footer(); ?>
