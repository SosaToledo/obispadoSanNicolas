<?php get_header(); ?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Buscar</span>
		<input type="search" class="search-field" placeholder="Buscar" value="<?php echo get_search_query() ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" />
</form>

<?php get_footer(); ?>
