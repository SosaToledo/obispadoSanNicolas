<?php get_header(); ?>

<style media="screen">

	.barraBusqueda{
		position: fixed;
		top:5%;
		width: 100%;
		z-index: 14;
	}
	.search-field{
		width: 100px;
		height: 38px;
		max-width: 40%;
		color:black;
		border: none;
		outline: 0;
		float: left;
	}
	.search-submit{
		background: rgba(175, 115, 49, 0);
		border: none;
		padding: 0;
		/*float: right;*/
	}

	.lupaBuscar{
		height: 38px;
		cursor: pointer;
		outline: none;
	}
	@media screen and (max-width:600px) {
			.barraBusqueda{
				top: 55px;
			}
	}
</style>
<div class="barraBusqueda">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field w3-input w3-animate-input" placeholder="Buscar..." value="<?php echo get_search_query() ?>" name="s" minlength=4 maxlength="45" autocomplete="off" required />
		<button type="submit" class="search-submit">
			<img class="lupaBuscar" src="<?php bloginfo(template_url);?>/img/iconos/lupa.png" ></img>
		</button>
	</form>
</div>

<?php get_footer(); ?>
