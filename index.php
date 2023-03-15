<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

include("funciones/sesiones/Sesion.php");



$sesion = new Sesion();

$sesion->cerrar_sesion();

?>

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta name="robots" content="index, follow" />

        <meta charset="utf-8">

            <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>

            <title>Prosigo | Sistema para control de cartera, registros contables, manejo de tesorería y la emisión de informes regulatorios.</title>

            <!-- core CSS -->

            <link href="css/bootstrap.min.css" rel="stylesheet"/>

            <link href="css/font-awesome.min.css" rel="stylesheet"/>

            <link href="css/animate.min.css" rel="stylesheet"/>

            <link href="css/owl.carousel.css" rel="stylesheet"/>

            <link href="css/owl.transitions.css" rel="stylesheet"/>

            <link href="css/prettyPhoto.css" rel="stylesheet"/>

            <link href="css/slick.css" media="screen" rel="stylesheet" type="text/css" />

            <link href="css/main.css" rel="stylesheet"/>

            <!--<link href="css/login.css" rel="stylesheet"/>-->



            <link rel="stylesheet" type="text/css" href="css/slider.css" />

            <!--[if lt IE 9]>

            <script src="js/html5shiv.js"></script>

            <script src="js/respond.min.js"></script>

            <![endif]-->       

            <!--<link rel="shortcut icon" href="images/ico/favicon.ico">

            <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">

            <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">

            <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">

            <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">-->





            <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>

            <noscript>

                <link rel="stylesheet" type="text/css" href="css/nojs.css" />

            </noscript>

    </head><!--/head-->



    <body id="home" class="homepage">



        <header id="header">

            <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner" >

                <div class="container">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                            <span class="sr-only">Toggle navigation</span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                            <span class="icon-bar"></span>

                        </button>

                        <a class="navbar-brand" href="index.php">

                            <img src="images/logo.png" class="logo">                        

                        </a>

                    </div>



                    <div class="collapse navbar-collapse navbar-right">

                        <div class="row">

                          <!--  <p class="datos"><i>soporte</i><b>(229)934.45.35    &nbsp;&nbsp;&nbsp;(229)166.97.05&nbsp;&nbsp;&nbsp;(229)158.66.42&nbsp;&nbsp;&nbsp;(229)165.05.99</b><span></span><a href="mailto:prosigorecepcion@hotmail.com">prosigorecepcion@hotmail.com</a></p>  -->


                        </div>

                        <nav>

                            <ul class="nav navbar-nav">

                            <!--    <li class="scroll active"><a href="#home">Inicio</a></li> -->
                            <li class="scroll"><a href="#home">Inicio</a></li>

                                <li class="scroll"><a href="#about">Nosotros</a></li>

                                <li class="scroll"><a href="#features">Servicios</a></li>                        

                                <li class="scroll"><a href="#portfolio">Productos</a></li>                                                                       

                                <li class="scroll"><a href="#get-in-touch">Contacto</a></li>
								
								<li class="scroll"><a href="#privacy">Aviso de Privacidad</a></li>

                                <li class="scroll"><a href="#" data-toggle="modal" data-target="#login">Ingresar</a></li>      

                            </ul>

                        </nav>

                    </div>

                </div><!--/.container-->

            </nav><!--/nav-->

        </header><!--/header-->



        <div class="modal fade" id="login" role="dialog">

            <!--<div class="modal-dialog ">-->

                <div class="modal-dialog modal-sm">



                <!-- Modal content-->

                <div class="modal-content">

                    <div class="modal-header" style="background: #45a6d6; ">

                        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->

                        <img data-dismiss="modal" src="images/logo.png" class="logo"/>

                    </div>

                    <div class="modal-body">

                            <form method="post" action="funciones/bd/consultas/Ingresar_Usuario.php">

                                <div class="form-group">

                                    <input type="text" name="rfc" class="form-control" placeholder="RFC"  maxlength="13" pattern="[A-Z0-9]{10,13}" required>

                                </div>

                                <div class="form-group">

                                    <input type="password" name="contrasenia" class="form-control" pattern="^(?=.*[a-zA-Z])(?=.*\d)([A-Za-z\d]){8,15}$" placeholder="Contraseña" required>

                                </div>

                                <div class="form-group" align="center">

                                    <p>Si no tienes tu contraseña solicitala hoy mismo.</p>

                                </div>

                                <div align="center">

                                    <button type="submit" class="btn btn-primary btn-lg wow bounceIn"  data-wow-duration="400ms" data-wow-delay="400ms">Ingresar</button>

                                </div>

                            </form>

                    </div>

                    <div class="modal-footer" style="background: black;">

                        <div style="color: white; text-align: left;">

                        Prosigo | Sistema para control de cartera, registros contables, tesorería e informes <span>Copyright © 2016 Todos los derechos reservados.</span>

                    </div>

                    </div>

                </div>

            </div>

        </div>





        <section id="main-slider">



            <div id="da-slider" class="da-slider">

                <div class="da-slide">

                    <h2>Sistema<br/><b>RADSIFINA <span>&reg;</span></b></h2>

                    <p>Es un sistema orientado a llevar el control de las operaciones crediticias de su empresa, controlando las siguientes variables: Prevención de lavado de dinero, calificación de cartera, control de tesorería, arrendamiento, gerencia/estadísticos y más.</p>                

                    <div class="da-img"><img src="images/slider1.png" alt="RADSIFINA" /></div>

                </div>

                <div class="da-slide">

                    <h2>Sistema<br/><b>RADGESTION <span>&reg;</span></b></h2>
                    
					<p>es un sistema que tiene por objeto establecer los lineamientos mínimos para el desarrollo de la actividad crediticia
						en el cual se deberán delimitar distintas funciones y responsabilidad de los órganos
						sociales, áreas involucradas, funcionarios y personal operativo, así como propiciar la
						creación de mecanismos de control y fomentar los usos mercantiles imperantes entre
						las instituciones financieras evitando conflictos de interés.</p>
                    <div class="da-img"><img src="images/slide-gestion.png" alt="RADGESTION" /></div>

                </div>
				
				<div class="da-slide">

                    <h2>Modulo<br/><b>Enfoque Basado en Riesgo<span>&reg;</span></b></h2>

                    <p>El modulo de enfoque basado en riesgo del sistema RADSIFINA es la implementación de una metodología a seguir para realizar la medición y evaluación del riesgo de la entidad financiera.</p>                                

                    <div class="da-img"><img src="images/slide-EBR.png" alt="EBR" /></div>

                </div>
				
				<div class="da-slide">

                    <h2>Sistema<br/><b>RADCONTABIL <span>&reg;</span></b></h2>

                    <p>Gestiona los registros contables y fiscales de la empresa en forma rápida, segura y confiable. Brinda diversos reportes, formatos de trabajo y gráficas que permiten soportar y evaluar el estado financiero de la organización.</p>                

                    <div class="da-img"><img src="images/slider2.png" alt="RADCONTABIL" /></div>

                </div> 

	

                <div class="da-slide">

                    <h2>Contabilidad<br/><b>Gubernamental <span>&reg;</span></b></h2>

                    <p>Sistema de gestion para organismos publicos y gubernamentales incluyendo contabilidad gubernamental, tesoreria, mantenimiento y digitalización.</p>                

                    <div class="da-img"><img src="images/slider3.png" alt="Gubernamental" /></div>

                </div> 
							

                <nav class="da-arrows">

                    <span class="da-arrows-prev"></span>

                    <span class="da-arrows-next"></span>

                </nav>

            </div>



        </section><!--/#main-slider-->





        <section id="about">

            <div class="container">

                <div class="section-header" style="margin-top:70px">                                                         

                    <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">

                        <h2 class="section-title text-left wow fadeInDown">Quienes somos</h2>

                        <p class="text-justify wow fadeInDown" id="quienes">

                            PROSIGO es una empresa fundada en marzo de 1988 por un grupo de entusiastas colaboradores cuya experiencia en el área de Sistemas Computacionales realizan un proyecto dirigido al comercio exterior (SAAI), dirigido específicamente a Agencias Aduanales. En Grupo Prosigo vamos para los 30 años de experiencia.<br/>Derivado de esto y gracias al empuje, entusiasmo y sobre todo a los logros alcanzados por parte de los fundadores se fue abriendo más el mercado logrando así el posicionamiento entre las organizaciones de crédito e instituciones financieras.<br/>

                            Es así que a partir de 1994 se convirtió en una empresa líder y pionera en el desarrollo y asesoría de software para uniones de crédito e instituciones financieras a nivel nacional, ofreciendo siempre: Calidad, Servicio y Precio.</p>



                    </div>

                    <div class="col-md-6 col-sm-12">

<!--                        <iframe  height="400" src="https://www.youtube.com/watch?v=pkDDGXUsxIY&amp;showinfo=0" frameborder="0" class="framer" allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen" msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen" webkitallowfullscreen="webkitallowfullscreen"></iframe>-->
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Fl_yxwCRBkg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>

                </div>





            </div>

        </section><!--/#about-->



        <section id="cta" class="wow fadeIn">

            <div class="container">



                <div class="row" id="banblue">





                    <div class="info">

                        <div>

                            <div class="col-sm-6 col-xs-12 wow fadeInLeft">

                                <h3 class="column-title">Hacia dónde vamos</h3>

                                <p class="text-justify">Hoy sabemos de los avances tecnológicos que existen a nivel mundial por tal motivo PROSIGO VERACRUZ, S.A. DE C.V. también busca crecer en el desarrollo de programas que ayuden a nuestros clientes a realizar sus operaciones más rápidamente buscando la eficiencia y eficacia en cada uno de nuestros programas, así como el servicio para el mantenimiento de los mismos.<br/>Por tal motivo día a día buscamos fortalecernos dentro de un mercado cada vez más competitivo buscando personas comprometidas con los objetivos básicos de nuestra empresa.</p>

                            </div>

                            <div class="col-sm-6 wow fadeInRight">

                                <h3 class="column-title">Misión</h3>

                                <p class="text-justify">Buscar la satisfacción de nuestros clientes cubriendo sus necesidades de manera profesional aplicando los conocimientos de las tecnologías de punta con la finalidad de brindar la mejor asesoría y alternativas de solución a sus sistemas de información.<br/><br/></p>

                                <h3 class="column-title">Visión</h3>

                                <p class="text-justify">Ser la empresa líder en el mercado de Tecnologías de Información, para ofertar calidad y funcionalidad en nuestros productos a través de la experiencia y capacitación constante de nuestro bien más preciado: El Recurso Humano. </p>

                            </div>

                        </div>

                        <div>

                            <div class="col-sm-6 col-xs-12 wow fadeInLeft">

                                <h3 class="column-title">Valores</h3>

                                <p class="text-justify">i.	RESPETO<br/>

                                    ii.	RESPONSABILIDAD<br/>

                                    iii.	HONESTIDAD<br/>

                                    iv.	TOLERANCIA<br/>

                                    v.	PUNTUALIDAD<br/>

                                    Todos y cada uno de estos conceptos son básicos para el buen desempeño de nuestras actividades dentro y fuera de nuestra empresa, mismos que pueden ser aplicados en nuestra vida cotidiana.<br/>

                                    Con todo lo anterior pasamos a la parte práctica de nuestra empresa tales como son las metas a lograr para ser los numero uno en el mercado.

                                </p>

                            </div>

                            <div class="col-sm-6 wow fadeInRight">

                                <h3 class="column-title">Objetivo general</h3>

                                <p class="text-justify">Garantizar la calidad de nuestros productos y servicios, esforzándonos día a día para mantener nuestros entandares de calidad, buscando así la satisfacción de nuestros clientes.<br/></p>

                                <h3 class="column-title">Objetivos específicos</h3>

                                <p class="text-justify">Desarrollar en tiempo y forma sistemas con apego a los estándares de ingeniería de software y acorde a las necesidades de nuestros clientes.

                                    Aplicar los principios básicos de atención y servicio al cliente con la finalidad de brindar una asesoría de calidad.

                                    Mantenernos siempre a la vanguardia. Para conocer y desarrollar las nuevas tecnologías de información que salgan al mercado todo esto orientado a mejorar siempre la atención y servicio a nuestros clientes.

                                </p>

                            </div>

                        </div>



                    </div>



                </div>



            </div>

        </section><!--/#cta-->





        <section id="clients">

            <div class="container">

                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown">Nuestros Clientes</h2>                

                </div>

                <div class="clientescolor wow fadeInDown">			                   

                    <div><img src="images/prodemex.png" /><span>Unión de Crédito Promotora para el Desarrollo Económico del Estado de México S.A. de C.V.</span></div>

                    <div><img src="images/unicrediat.png" /><span>Unión de Crédito Industrial y Agropecuaria de Tabasco S.A. de C.V.</span></div>

                    <div><img src="images/ucgt.png" /><span>Unión de Crédito Ganadero de Tabasco S.A. de C.V.</span></div>

                    <div><img src="images/credinor.png" /><span>Credinor Unión de Crédito S.A. de C.V.</span></div>

                    <div><img src="images/ucica.png" /><span>Unión de Crédito de la Industria de la Construcción de Aguascalientes S.A. de C.V.</span></div>                    

                    <div><img src="images/ucg.png" /><span>Unión de Crédito de Gasolineros S.A de C.V.</span></div>
					
					<div><img src="images/ucev.png" /><span>Unión de Crédito Empresarial de Veracruz S.A de C.V.</span></div>
					
					<div><img src="images/unicrey.png" /><span>Unión de Crédito de Reynosa S.A de C.V.</span></div>
					
					<div><img src="images/ucrnv.png" /><span>Unión de Crédito Regional del Norte de Veracruz</span></div>
					
					<div><img src="images/unicreco.png" /><span>Unión de Crédito de Tabasco S.A de C.V.</span></div>
					
					<div><img src="images/vallarta.png" /><span>Unión de Crédito de Puerto Vallarta S.A de C.V.</span></div>
					
					<div><img src="images/ucacsa.png" /><span>Unión de Crédito Agrícola de Corerepe S.A. de C.V.</span></div>
					
					<div><img src="images/valora.png" /><span>Valora Unión de Crédito S.A. de C.V.</span></div>
					
					<div><img src="images/sifide.png" /><span>SIFIDE</span></div>

                </div>

            </div>

        </section>







        <section id="features">

            <div class="container">

                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown">Servicios</h2>



                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">

                        <center><img class="img-responsive" src="images/main-feature.png" alt=""></center>

                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" id="colservices">

                        <div class="media service-box wow fadeInRight">

                            <div class="pull-left wow rotateIn" data-wow-duration="400ms" data-wow-delay="200ms">

                                <i class="fa fa-calculator"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Sistemas Prosigo</h4>

                                <p>Asesoría y desarrollos complementarios dentro de nuestros sistemas: RADSifina &reg;, RADContabil &reg;, Contabilidad Gubernamental &reg;. Así como una completa capacitación sobre los mismos.</p>

                            </div>

                        </div>



                        <div class="media service-box wow fadeInRight">

                            <div class="pull-left wow rotateIn" data-wow-duration="400ms" data-wow-delay="200ms">

                                <i class="fa fa-shield"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Capacitación y asesoramiento</h4>

                                <p>Capacitación en cursos informáticos que consideren sean necesarios para tener a su personal actualizado. Asesoramiento profesional para la creación de sistemas de información de su empresa, al igual que en la adquisición de equipo de computo (técnico, costo), como en necesidades de análisis de procedimientos y orientación de sus procesos.</p>

                            </div>

                        </div>



                        <div class="media service-box wow fadeInRight">

                            <div class="pull-left wow rotateIn" data-wow-duration="400ms" data-wow-delay="200ms">

                                <i class="fa fa-laptop"></i>

                            </div>

                            <div class="media-body">

                                <h4 class="media-heading">Soporte y Mantenimiento</h4>

                                <p>Diseño e instalación de Redes Lan Windows y Linux, y Servidores linux para redes de VoIP, redes VPN y redes WAN. Mantenimientos a equipos de cómputo. Soporte en casos de urgencias para disponer de nuestros equipos</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>





        <section id="links">

            <div class="container">

                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown">Enlaces de Interés</h2>                

                </div>



                <div class="enlaces wow fadeInDown">

                    <div><a href="http://www.condusef.gob.mx" target="_blank"><img src="images/condusef.png" /><span>CONDUSEF</span></a></div>

                    <div><a href="http://www.cnbv.gob.mx/Paginas/default.aspx" target="_blank"><img src="images/cnbv.png" /><span>CNBV</span></a></div>

                    <div><a href="https://www.burodecredito.com.mx" target="_blank"><img src="images/burocredito.png" /><span>Buró de Crédito</span></a></div>

                    <div><a href="https://www.fira.gob.mx/Nd/index.jsp" target="_blank"><img src="images/fira.png" /><span>FIRA</span></a></div>

                    <div><a href="http://www.sat.gob.mx/Paginas/Inicio.aspx" target="_blank"><img src="images/sat.png" /><span>SAT</span></a></div>

                    <div><a href="http://www.nafin.com/portalnf/content/home/home.html" target="_blank"><img src="images/nacional.png" /><span>Circulo</span></a></div>

                    <div><a href="HTTP://WWW.FITCHRATINGS.MX/DEFAULT.ASPX" target="_blank"><img src="images/fitch.png" /><span>Fitch Ratings</span></a></div>

                    <div><a href="HTTP://WWW.GOB.MX/SE" target="_blank"><img src="images/se.png" /><span>Secretaria de Economía</span></a></div>

                    <div><a href="HTTP://WWW.BURO.GOB.MX" target="_blank"><img src="images/buroentidades.png" /><span>Buró de Entidades financieras</span></a></div>

                    <div><a href="HTTP://WWW.CONUNION.COM.MX" target="_blank"><img src="images/conunion.png" /><span>CONUNION</span></a></div>

                </div>



            </div>

        </section>



        <section id="cta2">

            <div class="container">

                <div class="text-center">

                    <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms" style="text-shadow: 1px 1px 1px rgba(0,0,0,0.5)"><strong>SEGURIDAD</strong> Y CONFIANZA</h2>

                    <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms" style="text-shadow: 1px 1px 1px rgba(0,0,0,0.5)">En Grupo Prosigo vamos para los 30 años de experiencia, nuestros clientes nos respaldan, contamos con experiencia en sistematizacion<br/>y asesoria para instituciones financieras, diseño e implementacion de una infraestructura de comunicaciones bajo tecnologia de redes virtuales.</p>                



                </div>

            </div>

        </section>





        <section id="portfolio">

            <div class="container">



                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown">Productos</h2>                

                </div>

                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">



                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center producto">



                            <div class="moreinfo moreradsifina">

                                <div class="fleft">

                                    <h4 class="column-title">Sistema<br/><b>RADSIFINA&reg;</b></h4>

                                    <span class="close"></span>

                                    <div class="detail" id="detailradsifina"><!--important-->

                                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <a rel="video.php?nId=1" class="tag selected" onclick="javascript:detailclicked(this);">Caso de uso 1</a>

                                        <a rel="video.php?nId=2" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 2</a>

                                        <a rel="video.php?nId=3" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 3</a>

                                        </div>-->

                                        <div class="col-md-12 col-sm-12">

<!--                                    <iframe height="250" src="https://www                                           .youtube.com/embed/8kcrdhEBhNw"                                             frameborder="0" allowfullscreen                                         class="framerdetail"></iframe>-->
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/iNm3MYNPg0g" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>

                                        <p>Es un sistema para instituciones financieras mediante el cual se resuelven sus necesidades de control de cartera, sus registros contables.</p>

                                    </div>

                                </div>

                            </div>



                            <h4 class="column-title">Sistema<br/><b>RADSIFINA&reg;</b></h4>

                            <img src="images/slider1.png" class="wow fadeInDown">

                                <p class="text-center wow fadeInDown">Es un sistema para instituciones financieras mediante el cual se resuelven sus necesidades de control de cartera, sus registros contables, su manejo de tesorería y la emisión de informes regulatorios.</p>

                                <a href="" class="btn btn-primary btn-lg wow bounceIn openmore"  data-wow-duration="400ms" data-wow-delay="400ms" id="openmoreradsifina">Saber más</a>



                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center producto">



                            <div class="moreinfo moreradsifina">

                                <div class="fleft">

                                    <h4 class="column-title">Sistema<br/><b>RADCONTABIL&reg;</b></h4>

                                    <span class="close"></span>

                                    <div class="detail" id="detailradcontabil"><!--important-->

                                        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <a rel="video.php?nId=1" class="tag selected" onclick="javascript:detailclicked(this);">Caso de uso 1</a>

                                        <a rel="video.php?nId=2" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 2</a>

                                        <a rel="video.php?nId=3" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 3</a>

                                        </div>-->

                                        <div class="col-md-12 col-sm-12">

 <!--                                      <iframe height="250" src="https://www.youtube.com/embed/f-J8XZiWwc8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen class="framerdetail"></iframe>-->
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pkDDGXUsxIY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>

                                        <p>Gestiona los registros contables y fiscales de la empresa en forma rápida, segura y confiable. Brinda diversos reportes, formatos de trabajo y gráficas.</p>

                                    </div>

                                </div>

                            </div>



                            <h4 class="column-title">Sistema<br/><b>RADCONTABIL&reg;</b></h4>

                            <img src="images/slider2.png" class="wow fadeInDown">

                                <p class="text-center wow fadeInDown">Gestiona los registros contables y fiscales de la empresa en forma rápida, segura y confiable. Brinda diversos reportes, formatos de trabajo y gráficas que permiten soportar y evaluar el estado financiero de la organización.</p>

                                <a href="" class="btn btn-primary btn-lg wow bounceIn openmore"  data-wow-duration="400ms" data-wow-delay="400ms" id="openmoreradcontabil">Saber más</a>



                        </div>




						<!-- Gestion -->

						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center producto">



                            <div class="moreinfo moreradsifina">

                                <div class="fleft">

                                    <h4 class="column-title">Sistema<br/><b>RADGESTION&reg;</b></h4>

                                    <span class="close"></span>

                                    <div class="detail" id="detailradsifina"><!--important-->

                                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <a rel="video.php?nId=1" class="tag selected" onclick="javascript:detailclicked(this);">Caso de uso 1</a>

                                        <a rel="video.php?nId=2" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 2</a>

                                        <a rel="video.php?nId=3" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 3</a>

                                        </div>-->

                                        <div class="col-md-12 col-sm-12">

                                            <!--iframe height="250" src="https://www.youtube.com/embed/8kcrdhEBhNw" frameborder="0" allowfullscreen class="framerdetail"></iframe-->

                                        </div>

                                        <p>RADGESTION&reg en su estructura cuenta con procesos tales como:
											<ul class="text-center wow fadeInDown">
												<li>Alta de prospecto</li>
												<li>Apertura de tramite</li>
												<li>Alta de linea</li>
												<li>Mesa de control</li>
											</ul>
										</p>
										<p>Los cuales a su vez contienen etapas, dichas etapas requieren de un checklist para el control y seguimiento de las operaciones crediticias, tales como:
											<ul class="text-center wow fadeInDown">
												<li>Promocion</li>
												<li>Evaluacion</li>
												<li>Aprobacion</li>
												<li>Instrumentacion</li>
											</ul>
										</p>
                                    </div>

                                </div>

                            </div>



                            <h4 class="column-title">Sistema<br/><b>RADGESTION&reg;</b></h4>

                            <img src="images/slide-gestion.png" class="wow fadeInDown">

                                <p>RADGESTION&reg en su estructura cuenta con procesos tales como:
											<ul class="text-center wow fadeInDown">
												<li>Alta de prospecto</li>
												<li>Apertura de tramite</li>
												<li>Alta de linea</li>
												<li>Mesa de control</li>
											</ul>
										</p>

                                <a href="" class="btn btn-primary btn-lg wow bounceIn openmore"  data-wow-duration="400ms" data-wow-delay="400ms" id="openmoreradsifina">Saber más</a>



                        </div>
						
                        							
						<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center producto lastproduct">



                            <div class="moreinfo moreradsifina">

                                <div class="fleft">

                                    <h4 class="column-title">Sistema<br/><b>Contabilidad gubernamental&reg;</b></h4>

                                    <span class="close"></span>

                                    <div class="detail" id="detailradcontabil"><!--important-->

                                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <a rel="video.php?nId=1" class="tag selected" onclick="javascript:detailclicked(this);">Caso de uso 1</a>

                                        <a rel="video.php?nId=2" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 2</a>

                                        <a rel="video.php?nId=3" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 3</a>

                                        </div>-->

                                        <div class="col-md-12 col-sm-12">

                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/pkDDGXUsxIY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>

                                        <p>Sistema de gestion para organismos publicos y gubernamentales incluyendo contabilidad gubernamental, tesoreria, mantenimiento y digitalización.</p>

                                    </div>

                                </div>

                            </div>


                            <h4 class="column-title">Sistema<br/><b>Contabilidad gubernamental&reg;</b></h4>

                            <img src="images/slider3.png" class="wow fadeInDown">

                                <p class="text-center wow fadeInDown">Sistema de gestion para organismos publicos y gubernamentales incluyendo contabilidad gubernamental, tesoreria, mantenimiento y digitalización.</p>

                                <a href="" class="btn btn-primary btn-lg wow bounceIn openmore"  data-wow-duration="400ms" data-wow-delay="400ms" id="openmoreradcontabil">Saber más</a>



                        </div>
						
						<!-- EBR -->
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center producto lastproduct">



                            <div class="moreinfo moreradsifina">

                                <div class="fleft">

                                    <h4 class="column-title">Modulo<br/><b>Enfoque Basado en Riesgo&reg;</b></h4>

                                    <span class="close"></span>

                                    <div class="detail" id="detailradcontabil"><!--important-->

                                        <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                        <a rel="video.php?nId=1" class="tag selected" onclick="javascript:detailclicked(this);">Caso de uso 1</a>

                                        <a rel="video.php?nId=2" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 2</a>

                                        <a rel="video.php?nId=3" class="tag" onclick="javascript:detailclicked(this);">Caso de uso 3</a>

                                        </div>-->

                                        <div class="col-md-12 col-sm-12">

                                            <!--iframe height="250" src="https://www.youtube.com/embed/f-J8XZiWwc8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen class="framerdetail"></iframe-->

                                        </div>

                                        <p>El modulo de enfoque basado en riesgo del sistema RADSIFINA es la implementación de una metodología a seguir para realizar le medición y evaluación del riesgo de la entidad financiera.</p>

                                    </div>

                                </div>

                            </div>


                            <h4 class="column-title">Modulo<br/><b>Enfoque Basado en Riesgo&reg;</b></h4>

                            <img src="images/slide-EBR.png" class="wow fadeInDown">

                                <p class="text-center wow fadeInDown">El modulo de enfoque basado en riesgo del sistema RADSIFINA es la implementación de una metodología a seguir para realizar le medición y evaluación del riesgo de la entidad financiera.</p>

                                <a href="" class="btn btn-primary btn-lg wow bounceIn openmore"  data-wow-duration="400ms" data-wow-delay="400ms" id="openmoreradcontabil">Saber más</a>



                        </div>



                    </div>                            	



                </div>

                <!--/.row-->    

            </div>

        </section>








		<!-- Se descomentó hasta que haya testimonios
		
        <section id="work-process">

            <div class="container">

                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown" style="text-shadow: 1px 1px 1px rgba(0,0,0,0.5)">Testimoniales</h2>

                    <p class="text-center wow fadeInDown" style="text-shadow: 1px 1px 1px rgba(0,0,0,0.5)">Lo que nuestros clientes opinan.</p>

                </div>

                <div class="clientes wow fadeInDown">

                    <div><img src="images/prodemex.png" /><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>Unión de Crédito PRODEMEX</p></div>

                    <div><img src="images/unicrediat.png"/><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>Unión de Crédito UNICREDIAT</p></div>

                    <div><img src="images/ucgt.png"/><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>Unión de Crédito Ganadero de Tabasco S.A. de C.V.</p></div>

                    <div><img src="images/credinor.png" /><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>Credinor Unión de Crédito S.A. de C.V.</p></div>

                    <div><img src="images/ucev.png" /><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>Unión de Crédito Empresarial de Veracruz S.A. de C.V.</p></div>

                    <div><img src="images/sifide.png" /><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>SIFIDE</span></div>

                    <div><img src="images/ucg.png" /><span><q><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis augue sit amet turpis tempus vestibulum ac ac massa.</i></q></span><p>Unión de Crédito de Gasolineros S.A de C.V.</p></div>

                </div>

            </div>

        </section>

		-->



        <section id="get-in-touch">

            <div class="container">

                <div class="section-header">

                    <h2 class="section-title text-center wow fadeInDown">Contacto</h2>                

                </div>

                <div class="row">





                    <div class="col-sm-5 wow fadeInLeft">

                        <div class="contact-info">

                            <h4>HAGAMOS CONTACTO</h4>

                            <address>

                                <strong>

                                    <i class="fa fa-home"></i> República de Haití, <br/>Fraccionamiento los Pinos,<br/> Veracruz, Ver<br/>

                                    <i class="fa fa-phone"></i> Tel : (229) 934.45.35<br/>
                                    <i class="fa fa-phone"></i> Tel : (229) 166.97.05<br/>
                                    <i class="fa fa-phone"></i> Tel : (229) 158.66.42<br/>
                                    <i class="fa fa-phone"></i> Tel : (229) 165.05.99<br/>
                                    <i class="fa fa-phone"></i>Cel  : (229) 161.59.03<br/>

                                    <i class="fa fa-envelope"></i> prosigorecepcion@hotmail.com

                                </strong>

                            </address>

                            <h4>HORARIOS DE ATENCIÓN</h4>

                            <address>

                                <strong>Lunes a Viernes de 9:00 a 18:00 horas<br/>

                                    Sábado de 10:00 a 13:00 horas

                                </strong>

                            </address>

                        </div>

                    </div>



                    <div class="col-sm-7 wow fadeInRight">

                        <div class="contact-form">                           

                            <form id="main-contact-form" name="contact-form" method="post" action="#">

                                <div class="form-group">

                                    <input type="text" name="name" class="form-control" placeholder="Nombre" required>

                                </div>

                                <div class="form-group">

                                    <input type="email" name="email" class="form-control" placeholder="Email" required>

                                </div>

                                <div class="form-group">

                                    <input type="text" name="subject" class="form-control" placeholder="Asunto" required>

                                </div>

                                <div class="form-group">

                                    <textarea name="message" class="form-control" rows="6" placeholder="Mensaje" required></textarea>

                                </div>

                                <button type="submit" class="btn btn-primary btn-lg wow bounceIn"  data-wow-duration="400ms" data-wow-delay="400ms">Enviar mensaje</button>

                            </form>

                        </div>

                    </div>



                </div>

            </div>

        </section><!--/#get-in-touch-->
		
		
		<section id="privacy">

					<div class="container">

					<div class="section-header">

						<h2 class="section-title text-center wow fadeInDown" style="text-shadow: 1px 1px 1px rgba(0,0,0,0.5)">Aviso de privacidad</h2>					

					</div>



					<div class="text-justify wow fadeInDown">
					
						<p> PROSIGO VERACRUZ, S.A. DE C.V. con domicilio en República de Haití No. 170, Fraccionamiento los Pinos, CP 91870 Veracruz, Veracruz, es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección. </p>
						<p> Su información personal será utilizada para proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos, evaluar la calidad del servicio que le brindamos, realizar gestiones de facturación y cobranza de los servicios y productos solicitados. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos personales: Nombre, Apellidos, Dirección, RFC y Correo Electrónico. No se recabara ningún dato clasificado como sensible según la Ley Federal de Protección de Datos Personales en Posesión de los Particulares. </p>
						<p> Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales con la LIC. Ana Lilia Andrade Mendoza, cuya oficina está ubicada en: República de Haití No. 170, Fraccionamiento los Pinos, CP 91870 Veracruz, Veracruz, a los  teléfonos (229)-166-97-05/ 229-934-45-35 celular: 2291-615903 correo electrónico: prosigorecepcion@hotmail.com o visitar nuestra página de Internet www.prosigo.com.mx </p>
						<p> Asimismo, le informamos que sus datos personales no serán transferidos o tratados dentro o fuera del país, por personas distintas a esta empresa. </p>
						<p> Si usted no manifiesta su oposición para que sus datos personales sean utilizados para los fines arriba mencionados, se entenderá que ha otorgado su consentimiento para ello. <p>
						<p> Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través de  la LIC. Ana Lilia Andrade Mendoza, cuya oficina está ubicada en: República de Haití No. 170, Fraccionamiento los Pinos, CP 91870 Veracruz, Veracruz, a los teléfonos 229-166-97-05/229-934-45-35 celular 2291-615903 correo electrónico: prosigorecepcion@hotmail.com</p>
						<br>

					</div>



				</div>

			</section>



        <!--/#bottom-->



        <footer id="footer">

            <div class="container">

                <div class="row">

                    <div class="col-sm-8">

                        Prosigo | Sistema para control de cartera, registros contables, tesorería e informes <span>Copyright © 2016 Todos los derechos reservados.</span>

                    </div>
                    <div style="position:relative; width:120px; height:60px;">
                        <a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe" style="text-decoration:none;">
                            <img src="http://www.teamviewer.com/link/?url=426717&id=1379624804" alt="Descargar TeamViewer" title="Descargar TeamViewer" border="0" width="120" height="60">
                            <span style="position:absolute; top:50.5px; left:50px; display:block; cursor:pointer; color:#424242; font-family:Arial; font-size:10px; line-height:1.2em; font-weight:bold; text-align:center; width:65px;">Descargar TeamViewer
                            </span>
                        </a>
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



        <script src="js/jquery.js"></script>

        <script type="text/javascript" src="js/jquery.cslider.js"></script>

        <script src="js/bootstrap.min.js"></script>    

        <script src="js/owl.carousel.min.js"></script>

        <script src="js/mousescroll.js"></script>

        <script src="js/smoothscroll.js"></script>

        <script src="js/jquery.prettyPhoto.js"></script>

        <script src="js/jquery.isotope.min.js"></script>

        <script src="js/jquery.inview.min.js"></script>

        <script src="js/wow.min.js"></script>

        <script type="text/javascript" src="js/slick.js"></script>

        <script src="js/main.js"></script>

        <script src="js/funciones_prosigo.js"></script>



    </body>

</html>