<?php
get_header();?>
<style media="screen">
  body{
    background: rgba(147,206,222,1);
    background: -moz-radial-gradient(center, ellipse cover, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
    background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, rgba(147,206,222,1)), color-stop(41%, rgba(117,189,209,1)), color-stop(100%, rgba(73,165,191,1)));
    background: -webkit-radial-gradient(center, ellipse cover, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
    background: -o-radial-gradient(center, ellipse cover, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
    background: -ms-radial-gradient(center, ellipse cover, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
    background: radial-gradient(ellipse at center, rgba(147,206,222,1) 0%, rgba(117,189,209,1) 41%, rgba(73,165,191,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#93cede', endColorstr='#49a5bf', GradientType=1 );
  }
  img{
    margin: 50px auto 0;
    width: 30%;
    display: block;
    height: auto;
  }
  h1{
    font-family: verdana,sans-serif;
    font-size: 2em;
    text-align: center;
  }
  .logo{
    width: 240px;
    display: block;
    float: right;
    margin-right: 50px;
  }
</style>
  <img src="<?php bloginfo("template_url");?>/img/programador.png">
  <h1>Pagina web en desarrollo<br>disculpen las molestias.</h1>
  <img class="logo" src="<?php bloginfo("template_url");?>/img/logo.png">
<?php get_footer();
?>
