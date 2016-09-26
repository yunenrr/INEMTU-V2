<?php
 include './business/ConsultBusiness.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

    <title>INEMTU</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
    <link href="plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="plugins/Lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="plugins/Icons/et-line-font/style.css" rel="stylesheet">
    <link href="plugins/animate.css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!-- Icons Font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="./img/logo/logo.png" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {position: relative; }
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {width: 70%;margin: auto;
                        max-height: 445px;max-width: 560px}
    </style>
</head>

<body>
    <!-- Preloader
	============================================= -->
    <div class="preloader"><i class="fa fa-circle-o-notch fa-spin fa-2x"></i></div>
    <!-- Header
	============================================= -->
    <section class="main-header">
        <nav class="navbar navbar-default navbar-fixed-top" id="myMenu">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="img/logo/logo.png" 
                             style="height: 50px;width: 76px" /></a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#welcome" class="page-scroll">Inicio</a></li>
                            <li><a href="#services" class="page-scroll">Enfoques</a></li>
                            <li><a href="#portfolio" class="page-scroll">Proyectos</a></li>
                            <li><a href="#team" class="page-scroll">Ejemplo</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div id="owl-hero" class="owl-carousel owl-theme">
        </div>
    </section>

    <!-- Welcome
	============================================= -->
    <section id="welcome">
        <div class="container">
            <br />
            <h2>¡Hola!</h2>
            <hr class="sep">
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/welcome/logo.png" alt="logo">
            <p>Bienvenido a la charla sobre la carrera Bachillerato en Informática Empresarial, juntos vamos a aprender las diversas temáticas que son abordadas durante la carrera. Sin más preámbulo, comenzamos...</p>
        </div>
    </section>

    <!-- Services
	============================================= -->
    <section id="services">
        <div class="container">
            <h2>¿Qué hacemos en la carrera?</h2>
            <hr class="light-sep">
            <p>Nosotros aprendemos múltiples tecnologías como:</p>
            <div class="services-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-desktop"></span></div>
                        <div class="media-body">
                            <h3>Aplicaciones de escritorio</h3>
                            <p>Una aplicación de escritorio es aquella que se 
                                encuentra instalado en el ordenador o sistema de 
                                almacenamiento (USB) y podemos ejecutarlo sin 
                                internet en nuestro sistema operativo, al 
                                contrario que las aplicaciones en la nube que se 
                                encuentran en otro ordenador (servidor) al que 
                                accedemos a través de la red o internet a su 
                                software.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-global"></span></div>
                        <div class="media-body">
                            <h3>Desarrollo web</h3>
                            <p>Desarrollo web es un término amplio que define la 
                                creación de sitios web para Internet o una 
                                intranet. Para conseguirlo se hace uso de 
                                tecnologías de software del lado del servidor y 
                                del cliente que involucran una combinación de 
                                procesos de base de datos con el uso de un navegador web a fin de realizar determinadas tareas o mostrar información.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left"><span class="icon-documents"></span></div>
                        <div class="media-body">
                            <h3>Bases de datos</h3>
                            <p>Se le llama base de datos a los bancos de 
                                información que contienen datos relativos a 
                                diversas temáticas y categorizados de distinta 
                                manera, pero que comparten entre sí algún tipo 
                                de vínculo.</p>
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay=".6s">
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-mobile"></span></div>
                            <div class="media-body">
                                <h3>App móviles</h3>
                                <p>Una aplicación móvil se puede descargar, instalar y acceder directamente desde el teléfono
                                aprovechando los grandes avances tecnológicos que brindan día con día.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-toolbox"></span></div>
                            <div class="media-body">
                                <h3>Programación de hardware libre</h3>
                                <p>Se trabaja con hardware libre, como lo es una placa Arduino, y con un entorno de desarrollo,
                                empleado con el fin de facilitar el uso de dichos dispositivos en proyectos multidisciplinarios.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="media-left"><span class="icon-toolbox"></span></div>
                            <div class="media-body">
                                <h3>Enfoque empresarial</h3>
                                <p>Ayuda al futuro profesional en la planificación, control y dirección de la gestión de la informática
                                en la organización.</p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio
	============================================= -->
    <section id="portfolio">
        <div class="container-fluid">
            <h2>Nuestro trabajo</h2>
            <hr class="sep">
            <p>A continuación unos proyectos realizados por los estudiantes</p>
            <div class="row">
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a class="portfolio-box" href="img/portfolio/NAPACORI.png" data-lightbox="image-1" data-title="Desarrollo Web">
                        <img src="img/portfolio/NAPACORI.png" class="img-responsive" alt="1"
                             style="height: 235px;width: 437px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Desarrollo Web
                                </div>
                                <div class="project-name">
                                    Yunen Ramos y Brayan Villalobos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/Redes.png" class="portfolio-box" data-lightbox="image-2" data-title="Redes">
                        <img src="img/portfolio/Redes.png" class="img-responsive" alt="2"
                             style="height: 235px;width: 437px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Redes
                                </div>
                                <div class="project-name">
                                    Michael M., Joseph C., Brayan V. y Yunen R.
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/IMG-20160924-WA0034.jpg" class="portfolio-box" data-lightbox="image-3" data-title="Lenguajes">
                        <img src="img/portfolio/IMG-20160924-WA0034.jpg" class="img-responsive" alt="3"
                             style="height: 235px;width: 437px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Lenguajes
                                </div>
                                <div class="project-name">
                                    Kevin Esquivel y Luis Castillo
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/IMG-20160924-WA0032.jpg" class="portfolio-box" data-lightbox="image-4" data-title="Lenguajes">
                        <img src="img/portfolio/IMG-20160924-WA0032.jpg" class="img-responsive" alt="4"
                             style="height: 235px;width: 437px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Lenguajes
                                </div>
                                <div class="project-name">
                                    Kevin Esquivel y Luis Castillo
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/Buscaminas.png" class="portfolio-box" data-lightbox="image-5" data-title="Programación 1">
                        <img src="img/portfolio/Buscaminas.png" class="img-responsive" alt="5"
                             style="height: 235px;width: 437px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Programación 1
                                </div>
                                <div class="project-name">
                                    Edwin Navarro Barahona
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/Buscaminas error.png" class="portfolio-box" data-lightbox="image-6" data-title="Programación 1">
                        <img src="img/portfolio/Buscaminas error.png" class="img-responsive" alt="6"
                             style="height: 235px;width: 437px;">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Programación 1
                                </div>
                                <div class="project-name">
                                    Edwin Navarro Barahona
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container">
            <h2>Ejemplo</h2>
            <hr class="sep">
            <!-- Carrusel -->
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      
                        <?php
                            $consultBusiness = new ConsultBusiness();
                            $pictures = $consultBusiness->getAllPictures();
                            $temp = 1;
                            foreach ($pictures as $currentPicture) 
                            {
                                echo '<li data-target="#myCarousel" data-slide-to="'.$temp.'"></li>';
                                $temp++;
                            }
                        ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="./uploads/pictures/manuales.png"/>
                        </div>
                        
                        <?php
                            $consultBusiness = new ConsultBusiness();
                            $pictures = $consultBusiness->getAllPictures();
                           
                            foreach ($pictures as $currentPicture) 
                            {
                                echo'<div class="item">'
                                . '<img src="./uploads/pictures/'.$currentPicture->path.'"/>'
                                        . '</div>';
                            }
                        ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                      <span class="icon-next" aria-hidden="true"></span>
                      <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
            <hr class="sep">
            <div class="container">
                <!-- Colección de botones -->
                <div>
                    <button type="button" class="btn btn-default" 
                            onclick="changeColor('btnDev','white')">Blanco</button>
                    <button type="button" class="btn btn-primary" 
                            onclick="changeColor('team','#1E88E5')">Azul</button>
                    <button type="button" class="btn btn-success" 
                            onclick="changeColor('myMenu','#2eb82e')">Verde</button>
                    <button type="button" class="btn btn-warning" 
                            onclick="changeColor('footer','#cc6600')">Naranja</button>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer
	============================================= -->
    <footer id="footer">
        <div class="container">
            <h6>&copy; 2016 INEMTU: Informática Empresarial Turrialba</h6>
                <div class="col-md-10 col-md-offset-4">
                    <div class="col-md-10 text-right">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info btn-lg" id="btnDev" 
                                data-toggle="modal" data-target="#myModal"
                                style="background-color: #24242A; float: left">Desarrolladores</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
    
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header" style="background-color: #24242A;">
                                        <button type="button" class="close" data-dismiss="modal"
                                                style="color:#FFF;">&times;</button>
                                        <h4 class="modal-title text-center" style="color:#FFF;">Desarrolladores</h4>
                                    </div>
                                    <div class="modal-body text-left">
                                        <a href="https://www.facebook.com/jessika.moralesmadrigal" target="_blank"><h6 class="text-primary">Jessika Morales Madrigal</h6></a>
                                        <a href="https://www.facebook.com/yunenrr" target="_blank"><h6 class="text-primary">Yunen Ramos Ramírez</h6></a>
                                        <a href="https://www.facebook.com/vanessa.calderon.908347" target="_blank"><h6 class="text-primary">Karen Calderon Calvo</h6></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- JS PLUGINS -->
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="plugins/countTo/jquery.countTo.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <!-- GOOGLE MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
        /*
         * Función que permite cambiar el color de fondo
         * @param {string} section
         * @param {string} color
         * @returns {none}
         */
        function changeColor(section,color)
        {
            document.getElementById(section).style.backgroundColor=color;

            if(color === 'white')
            {
                changeColorText(section,'black');
            }//Fin del if
        }//Fin de la función

        /**
         * Función que permite cambiar el color de texto
         * @param {string} section
         * @param {string} color
         * @returns {none}
         */
        function changeColorText(section,color)
        {
            document.getElementById(section).style.color=color;
        }//Fin de la función
    </script>
</body>

</html>