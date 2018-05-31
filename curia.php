<?php
/*
	 * Template Name: Página de la Curia
	 *
 */
get_header();
?>
<body id="main">
    <style media="screen">
    @media screen and (max-width:500px) {
    header{
        background-image: url('<?php bloginfo("template_url") ?>/img/historia.jpg')!important;
    }
    }
    </style>
    <header style="background: url('<?php bloginfo("template_url") ?>/img/historia.jpg') no-repeat center; background-size:cover;">
        <p>Jerarquia del <br> Obispado de San Nicolas de los Arroyos</p>
    </header>
    <?php
    include "menu.php";
    include 'searchbar.php';
    ?>
    <!--Content Start -->
    <style>
        .caja{
            border: 6px solid black;
        }
    </style>
    <div class="container">
        <div class="row">
            <!--Structure-->
            <article class="container col-sm-10">
                <!--Obispo-->
                <div class="row">
                    <div class="col"><h1>Obispo</h1></div>
                </div>
                <!--Obispo Emerito-->
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-12 col-sm-11">ObispoEmerito</div>
                </div>
                <!--bicariosGenerales-->
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-12 col-sm-10">Vicarios Generales</div>
                </div>
                <!--bicariosGenerales-->
                <div class="row">
                    <div class="col"></div>
                    <div class="col-12 col-sm-9">Vice-canciller</div>
                </div>
                <!--bicariosGenerales-->
                <div class="row">
                    <div class="col"></div>
                    <div class="col-12 col-sm-9">Administración</div>
                </div>
            </article>
            <!--Saint-->
            <aside class=" container col-sm-2">
                Imagen del santo
            </aside>
        </div>
    </div>
<?php get_footer();?>
