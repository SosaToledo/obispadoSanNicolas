<?php
/*
	 * Template Name: Página de la Curia
	 *
 */
get_header();
?>
<body id="main">
<style media="screen">
    .contenedorCuria {
        width:90%;
        margin:auto;
        margin-top:20px;
    }
    .curiaTitulo{
        font-family:Verdana,sans-serif;
        margin-left:60px;
        margin-bottom:20px;
    }
    .filaUno,.filaDos,.filaTres,.filaCuatro{
        display:flex;
        flex-wrap:wrap;
    }
    .obispoCuria{
        width:60%;
        position:relative;
    }
    .obispoPicture{
        position:absolute;
        top:0;
        left:0;
    }
    .fotoPatron{
        width:35%;
    }
    .fotoPatron p{
        font-family:Verdana,sans-serif;
    }
    .curiaObispo{
        width:220px;
    }
    .curiaSantoPatrono{
        width:200px;
    }
    .cajaObispo{
        max-width:500px;
        color:black;
        margin-right:50px;
        margin-left:150px;
        margin-top:150px;
    }
    .obispoDetalle{
        padding:10px;
        padding-left:100px;
        background-color:white;
        border: 3px solid red;
        border-radius:5px;
    }
    .flechaRoja > .fa-arrow-down{
        display:block;
        color:red;
        padding:10px;
        font-size:60px;
        margin: 2px auto;
        text-align:center;
    }
    .filaDos{
        margin-left:80px;
    }
    .obispoEmerito{
        position:relative;
    }
    .curiaEmerito{
        width:150px;
        position:absolute;
        top:0;
        left:0;
    }
    .emeritoDetalle{
        padding:20px;
        padding-left:75px;
        margin-top:40px;
        margin-left:100px;
        background-color:white;
        color:black;
        border: 2px solid blue;
        border-radius: 5px;
    }
    .flechaAzul > .fa-arrow-down{
        display:block;
        color:blue;
        padding:10px;
        font-size:45px;
        margin: 2px auto;
        text-align:center;
    }
    .filaTres{
        margin-left:200px;
    }
    .cajaVerde{
        display:block;
    }
    .aux{
        padding:10px;
        border-radius:5px;
        border: 2px solid green;
        background-color:white;
        color:black;
        
    }
    .flechaVerde > .fa-arrow-down{
        display:block;
        color:green;
        padding:10px;
        font-size:40px;
        margin: 2px auto;
        text-align:center;
    }
    .filaCuatro{
        margin-left:300px;
    }
    
    @media screen and (max-width:780px){
        header{border-bottom:2px solid #a29f76;}
        .obispoCuria{width:100% !important;}
        .cajaObispo{margin-right:0px !important;}
        .fotoPatron{display:none;}
        .flechaRoja,.flechaAzul,.flechaVerde{display:none;}
        .filaDos{margin-left:40px !important;}
        /* .obispoEmerito{width:100%;} */
        .emeritoDetalle{width:100%;}
        .filaTres,.filaCuatro{margin:15px 0px 15px 0px !important;text-align:center;}
        .filaTres{margin-top:30px!important;}
        .cajaVerde{width:100% !important;}
    }
    @media screen and (max-width:500px) {
        header{
            border-bottom:2px solid #a29f76;background-image: url('<?php bloginfo("template_url") ?>/img/historia.jpg')!important;
        }
        .obispoCuria{text-align:center;}
        .obispoPicture{position:relative !important;}
        .obispoPicture > img {width:80%;}
        .cajaObispo{margin:15px 0px !important;}
        .obispoDetalle{padding-left:0px!important;padding-right:0px!important;padding-bottom:0px!important;}
        .obispoDetalle > img {float:none !important;}
        .filaDos{margin-left:0px!important;}
        .fotoEmerito{text-align:center;}
        .curiaEmerito{position:relative;width:70%;}
        .emeritoDetalle{margin:0px;margin-top:10px;}
    }
</style>
    <header style="border-bottom:2px solid #a29f76;background: url('<?php bloginfo("template_url") ?>/img/historia.jpg') no-repeat center; background-size:cover;">
        <p>Jerarquia del Obispado</p>
    </header>
    <?php
    include "menu.php";
    include 'searchbar.php';
    ?>
    <div class="contenedorCuria">
        <div class="curiaTitulo">
            <h2>Estructura del Obispado de San Nicolás de los Arroyos</h2>
        </div>
        <div class="filaUno">
            <div class="obispoCuria">
                <div class="obispoPicture">
                    <img class="curiaObispo" src="<?php bloginfo(template_url);?>/img/curiaObispo.png" alt="Obispo">
                </div>
                <div class="cajaObispo">
                    <div class="obispoDetalle">
                        <strong style="color:black;">Obispo Mons. Hugo Norberto Santiago</strong> 
                        <br>
                        <br>
                        <img style="width:65px;float:left;margin-right:10px;" src="<?php bloginfo(template_url);?>/img/iconos/circuloRadio.png" alt="escudo">
                        <div class="escudo" style="color:black;">
                            Lema episcopal <br>
                            <strong style="color:black;font-size:20px;">HÁGASE</strong>
                        </div>
                        <br>

                    </div>
                    <div class="flechaRoja">
                        <i class="fa fa-arrow-down"></i>
                    </div>
                </div>
            </div>
            <div class="fotoPatron">
                <img class="curiaSantoPatrono" src="<?php bloginfo(template_url);?>/img/curiaSantoPatrono.png" alt="Obispo">
                <p><strong>Santo patrón: <br> San Nicolás de Bari (6 de diciembre) Catedral de San Nicolás de Bari.</strong></p>
            </div>
        </div>
        <div class="filaDos">
            <div class="obispoEmerito">
                <div class="fotoEmerito">
                    <img class="curiaEmerito" src="<?php bloginfo(template_url);?>/img/curiaEmerito.png" alt="Emerito">
                </div>
                <div class="emeritoDetalle"><strong style="color:black;">Obispo emérito: </strong><br> Mons. Hector Sabatino Cardelli.</div>
                <div class="flechaAzul">                        <i class="fa fa-arrow-down"></i>
</div>
            </div>
        </div>
        <div class="filaTres">
            <div class="cajaVerde">
                <div class="aux">
                    <strong style="color:black;">Vicarios generales:</strong> Javier A. Fortunato , Héctor Molfesa
                </div>
                <div class="flechaVerde">                        
                    <i class="fa fa-arrow-down"></i>
                </div>
            </div>
        </div>
        <div class="filaCuatro">
            <div class="cajaVerde" style="width:320px;">
                <div class="aux">
                    <strong style="color:black;">Vice-Canciller:</strong> Gustavo Forastieri.
                </div>
                <div class="flechaVerde">                        
                    <i class="fa fa-arrow-down"></i>
                </div>
            </div>
        </div>
        <div class="filaCuatro">
            <div class="cajaVerde" style="width:320px;">
                <div class="aux">
                    <strong style="color:black;">Administración:</strong> Jorge Ugartemendia.
                </div>
            </div>
        </div>
    </div>

<?php  include 'despedida.php';?>
<?php get_footer();?>
