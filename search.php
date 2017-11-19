<?php
/**
 * The template for displaying all pages
 *
 *
 *
 * @package WordPress
 * @since 1.0
 * @version 1.0
 */
get_header();?>
<body id="main">
<style media="screen">
@media screen and (max-width:500px) {
  header{
    background-image: url('<?php bloginfo("template_url") ?>/img/celunoticias.jpg')!important;
  }
}
</style>
<header style="background: url('<?php bloginfo("template_url") ?>/img/noticias.jpg') no-repeat center; background-size:cover;">
	<p style="color:white; font-size:4.5em; font-family:verdana;width:60%;text-decoration:none;border-bottom:8px solid white">Busqueda</p>
</header>
<?php
include "menu.php";


echo '<div class="resultados">';
?>

<h2 style="font-family:verdana,sans-serif;text-align:center;">Resultado de la busqueda:</h2>

  <form role="search" method="get" class="search-form" style="width:100%;margin:10px;height:30px;" action="<?php echo home_url( '/' ); ?>">
  	<input type="search" class="search-field w3-input w3-third " style="margin-right:5px;color:black;width:88%;margin:none;" placeholder="<?php echo esc_attr_x( 'Ingrese termino, nombre, iglesia, etc...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Buscar:', 'label' ) ?>" />
  	<input type="submit" class="search-submit w3-bar-item w3-button" style="width:10%;background-color:#A29f76" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"/>
  </form>
<?php
//
// global $query_string;
//
// $search_query = wp_parse_str( $query_string );
// $search = new WP_Query( $search_query );

global $wp_query;
$total_results = $wp_query->found_posts;
echo $total_results;

$args=array('post_per_page' => -1);
$query = new WP_Query($args);
	// if (  have_posts() ) {
	// 	while ( have_posts() ) {
	// 		 the_post();
  if ($query -> have_posts()){
    while($query -> have_posts()):
      $query -> the_post();
			?><div class="resultadoBox">
        <?php $categoria = get_the_category()[0]->slug; ?>

        <?php if ($categoria == 'noticias' || $categoria == 'historia' || $categoria == 'obispo-actual' || $categoria == 'obispos-anteriores' || $categoria == '' || $categoria == 'ultimos-escritos'  ):?>
          <a href="<?php the_permalink();?>"><h2 class="tituloRe"><?php the_title() ?></h2></a>
          <?php the_excerpt(); ?>
          <div style="width:100%;">
            <a href="<?php the_permalink();?>"><h4 class="linkBusqueda"> + Info </h4></a>
          </div>
        <?php else: ?>
          <h2 class="tituloRe"><?php the_title() ?></h2>
          <?php the_content(); ?>
        <?php endif; ?>
      </div>
			<?php
		endwhile;
    wp_reset_query(); // end while
	}else {
		?><h1>No se encontraron resultados :(</h1><?php
	}
  echo '</div>';
?>


<?php get_footer();?>
