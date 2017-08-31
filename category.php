<?php get_header();?>

<h1 class="tituloCategoria">Estas en <?php  echo  get_query_var('category_name');?> </h1>
<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
    ?>
    <div class="entradaCat">
      <?php if(has_post_thumbnail()){
        the_post_thumbnail('slideProyecto');
      }?>
      <div class="columnaEntrada">
        <h1 class="tituloEntradaCat"> <?php the_title(); ?> </h1>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>"> Leer mas</a>
      </div>
    </div>
    <?php
	} // end while
  ?>
  <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
  <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
  <?php
}else {
  ?> <h1 class="noHayQueMostrar"> No hay contenido para mostrar...</h1>
  <?php
} // end if
get_footer(); ?>
