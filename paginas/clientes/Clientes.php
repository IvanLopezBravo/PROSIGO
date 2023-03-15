<?php
include("../../funciones/bd/BD.php");
include("../../funciones/sesiones/Sesion.php");

$bd = new BD();

$sesion = new Sesion();
$sesion->iniciar_sesion();

if (isset($_SESSION['SESION_Usuario'])) {
    ?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta name="robots" content="index, follow" />
            <meta charset="utf-8">
                <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
                <title>Prosigo | Sistema para control de cartera, registros contables, manejo de tesorería y la emisión de informes regulatorios.</title>
                <!-- core CSS -->
                <link href="../../css/bootstrap.min.css" rel="stylesheet"/>
                <link href="../../css/font-awesome.min.css" rel="stylesheet"/>
                <link href="../../css/animate.min.css" rel="stylesheet"/>
                <link href="../../css/owl.carousel.css" rel="stylesheet"/>
                <link href="../../css/owl.transitions.css" rel="stylesheet"/>
                <link href="../../css/prettyPhoto.css" rel="stylesheet"/>
                <link href="../../css/slick.css" media="screen" rel="stylesheet" type="text/css" />
                <link href="../../css/main.css" rel="stylesheet"/>
                <link rel="stylesheet" type="text/css" href="../../css/slider.css" />
                <!--[if lt IE 9]>
                <script src="js/html5shiv.js"></script>
                <script src="js/respond.min.js"></script>
                <![endif]-->       
                <!--<link rel="shortcut icon" href="images/ico/favicon.ico">
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
                <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
                <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->


                <script type="text/javascript" src="../../js/modernizr.custom.28468.js"></script>
                <noscript>
                    <link rel="stylesheet" type="text/css" href="../../css/nojs.css" />
                </noscript>
        </head><!--/head-->

        <body id="home" class="homepage">

            <header id="header">
                <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner" style="background:url(../../images/waves.jpg)">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="Clientes.php">
                                <img src="../../images/logo.png" class="logo">                        
                            </a>
                        </div>

                        <div class="collapse navbar-collapse navbar-right">
                            <div class="row">
                                <p class="datos"><i>soporte</i><b>01 (229) <strong>934.45.35</strong> ó <strong>178.06.24</strong></b><span></span><a href="mailto:prosigorecepcion@hotmail.com">prosigorecepcion@hotmail.com</a></p>

                            </div>
                            <ul class="nav navbar-nav">
                                <li class="scroll active"><a href="Clientes.php">Bienvenido <?php echo $_SESSION['SESION_Usuario'] ?></a></li>
                                <li class="scroll"><a href="../../funciones/descargar/Descargar_Factura_Masiva.php">Facturas Masivas</a></li>
                                <li class="scroll"><a href="#portfolio">Facturas Individual</a></li>                       
                                <li class="scroll"><a href="../../index.php">Cerrar Sesión</a></li>  
                            </ul>
                        </div>
                    </div><!--/.container-->
                </nav><!--/nav-->
            </header><!--/header-->

            <section id="main-slider">

                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Sistema<br/><b>RADSIFINA <span>&reg;</span></b></h2>
                        <p>Es un sistema orientado a llevar el control de las operaciones crediticias de su empresa, controlando las siguientes variables: Prevención de lavado de dinero, calificación de cartera, control de tesorería, arrendamiento, gerencia/estadísticos y más.</p>                
                        <div class="da-img"><img src="../../images/slider1.png" alt="Jarabe de Horchata" /></div>
                    </div>
                    <div class="da-slide">
                        <h2>Sistema<br/><b>RADCONTABIL <span>&reg;</span></b></h2>
                        <p>Gestiona los registros contables y fiscales de la empresa en forma rápida, segura y confiable. Brinda diversos reportes, formatos de trabajo y gráficas que permiten soportar y evaluar el estado financiero de la organización.</p>                
                        <div class="da-img"><img src="../../images/slider2.png" alt="Jarabe de Horchata" /></div>
                    </div> 

                    <div class="da-slide">
                        <h2>Contabilidad<br/><b>Gubernamental <span>&reg;</span></b></h2>
                        <p>Sistema de gestion para organismos publicos y gubernamentales incluyendo contabilidad gubernamental, tesoreria, mantenimiento y digitalización.</p>                
                        <div class="da-img"><img src="../../images/slider3.png" alt="Jarabe de Horchata" /></div>
                    </div> 


                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>

            </section><!--/#main-slider-->


            <section id="portfolio">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title text-center wow fadeInDown">Facturas Emitidas por Prosigo S.A de S.V</h2>                
                    </div>
                    <div class="row">
                        <div class="col-sm-1 wow fadeInRight"></div>
                        <div class="col-sm-4 wow fadeInRight">
                            <div class="contact-form">                           
                                <div class="form-group" align="center">
                                    <ol>
                                        <?php include("Factura_Individual.php"); ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInRight">
                            <div class="contact-form">                           
                                <div class="form-group" align="center">
                                    <ol>
                                        <?php include("XML_Individual.php"); ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1 wow fadeInRight"></div>
                    </div>
                </div>
                </div>
            </section><!--/#get-in-touch-->


            <!--/#bottom-->

            <footer id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            Prosigo | Sistema para control de cartera, registros contables, tesorería e informes <span>Copyright © 2016 Todos los derechos reservados.</span>
                        </div>
                        <div class="col-sm-4">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>                        
                            </ul>
                        </div>
                    </div>
                </div>
            </footer><!--/#footer-->

            <script src="../../js/jquery.js"></script>
            <script type="text/javascript" src="../../js/jquery.cslider.js"></script>
            <script src="../../js/bootstrap.min.js"></script>    
            <script src="../../js/owl.carousel.min.js"></script>
            <script src="../../js/mousescroll.js"></script>
            <script src="../../js/smoothscroll.js"></script>
            <script src="../../js/jquery.prettyPhoto.js"></script>
            <script src="../../js/jquery.isotope.min.js"></script>
            <script src="../../js/jquery.inview.min.js"></script>
            <script src="../../js/wow.min.js"></script>
            <script type="text/javascript" src="../../js/slick.js"></script>
            <script src="../../js/main.js"></script>
            <script src="../../js/funciones_prosigo.js"></script>
            <script>
            window.onload = function () {
                eliminar_sesion();
            }
            </script>
        </body>
    </html>
    <?php
} else {
    header("Location: ../../index.php");
}
?>