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
    <meta property="og:url" content="http://inemtu.com/" />
    <meta property="og:title" content="INEMTU" />
    <meta property="og:description" content="Informática Empresarial Turrialba" />
    <meta property="og:image" content="./img/logo/logo.png"" />
    <meta name="author" content="Yunen Ramos Ramírez" />
    <meta property="fb:app_id" content="314305518936861" />

    <!-- Bootstrap Css -->
    <link href="bootstrap-assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Style -->
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
        .carousel-inner > .item > a > img {width: 70%;margin: auto;max-height: 445px;}
    </style>
</head>

<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '314305518936861',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/es_LA/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
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
                    <a class="navbar-brand" href="index.php">
                        <img src="img/logo/logo.png" style="height: 50px;width: 76px" />
                    </a>
                </div>
                <div class="collapse navbar-collapse text-center" id="bs-example-navbar-collapse-1">
                    <div class="col-md-8 col-xs-12 nav-wrap">
                        <ul class="nav navbar-nav">
                            <li><a href="#welcome" class="page-scroll">Inicio</a></li>
                            <li><a href="#services" class="page-scroll">Enfoques</a></li>
                            <li><a href="#portfolio" class="page-scroll">Ejemplos</a></li>
                            <li><a href="#team" class="page-scroll">Demostración</a></li>
                        </ul>
                    </div>
                    <div class="social-media hidden-sm hidden-xs">
                    	<ul class="nav navbar-nav">
                    		<li><a href="https://www.facebook.com/Inemtu-1420709231277126/" target="_blank"><i class="fa fa-facebook"></i></a></li>
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
            <img class="img-responsive center-block wow fadeInUp" data-wow-delay=".3s" src="img/logo/logo.png" alt="logo">
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
                        <div class="media-left">
                            <button style="background:#24242A;border: none" id="iconAppEsc"
                                    rel="popover">
                                <span class="icon-desktop"></span>
                            </button>
                        </div>
                        <div class="media-body">
                            <h3>Aplicaciones de escritorio</h3>
                            <p>
                                Es aquella que se encuentra instalado en el 
                                ordenador o sistema de almacenamiento y podemos 
                                ejecutarlo sin internet en nuestro sistema 
                                operativo.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left">
                            <button style="background:#24242A;border: none" id="iconDesWeb"
                                    rel="popover">
                                <span class="icon-global"></span>
                            </button>
                        </div>
                        <div class="media-body">
                            <h3>Desarrollo web</h3>
                            <p>
                                Son aquellas herramientas que los usuarios 
                                pueden utilizar accediendo a un servidor web a 
                                través de Internet o de una intranet mediante 
                                un navegador.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left">
                            <button style="background:#24242A;border: none" id="iconDatBas"
                                    rel="popover">
                                <span class="icon-documents"></span>
                            </button>
                        </div>
                        <div class="media-body">
                            <h3>Bases de datos</h3>
                            <p>
                                Es un almacén que nos permite guardar grandes 
                                cantidades de información de forma organizada 
                                para que luego podamos encontrar y utilizar 
                                fácilmente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay=".6s">
                    <div class="col-md-4">
                        <div class="media-left">
                            <button style="background:#24242A;border: none" id="iconAppM"
                                    rel="popover">
                                <span class="icon-mobile"></span>
                            </button>
                        </div>
                        <div class="media-body">
                            <h3>App móviles</h3>
                            <p>
                                Una aplicación móvil se puede descargar, 
                                instalar y acceder directamente desde el teléfono 
                                aprovechando los grandes avances tecnológicos 
                                que brindan día con día.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left">
                            <button style="background:#24242A;border: none" id="iconHardwareF"
                                    rel="popover">
                                <span class="icon-toolbox"></span>
                            </button>
                        </div>
                        <div class="media-body">
                            <h3>Programación de hardware</h3>
                            <p>
                                Se trabaja con hardware, como lo es una 
                                placa Arduino, y con un entorno de desarrollo, para 
                                facilitar el uso en proyectos multidisciplinarios.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="media-left">
                            <button style="background:#24242A;border: none" id="iconEnfE"
                                    rel="popover">
                                <span class="icon-pencil"></span>
                            </button>
                        </div>
                        <div class="media-body">
                            <h3>Enfoque empresarial</h3>
                            <p>
                                Ayuda al futuro profesional en la planificación, 
                                control y dirección de la gestión de la informática 
                                en la organización.
                            </p>
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
                        <img src="img/portfolio/min/NAPACORI.png" class="img-responsive" alt="1">
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
                        <img src="img/portfolio/min/Redes.png" class="img-responsive" alt="2">
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
                    <a href="img/portfolio/IMG-20160924-WA0034.jpg" class="portfolio-box" data-lightbox="image-3" data-title="Desarrollo Web">
                        <img src="img/portfolio/min/IMG-20160924-WA0034.jpg" class="img-responsive" alt="3">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Desarrollo Web
                                </div>
                                <div class="project-name">
                                    Kevin Esquivel y Luis Castillo
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/IMG-20160924-WA0032.jpg" class="portfolio-box" data-lightbox="image-4" data-title="Desarrollo Web">
                        <img src="img/portfolio/min/IMG-20160924-WA0032.jpg" class="img-responsive" alt="4">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Desarrollo Web
                                </div>
                                <div class="project-name">
                                    Kevin Esquivel y Luis Castillo
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/library.png" class="portfolio-box" data-lightbox="image-5" data-title="Aplicación de escritorio">
                        <img src="img/portfolio/min/library.png" class="img-responsive" alt="5">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Aplicación de escritorio
                                </div>
                                <div class="project-name">
                                    Michael Meléndez y Joseph Cordero
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/Maze.png" class="portfolio-box" data-lightbox="image-6" data-title="Aplicación de escritorio">
                        <img src="img/portfolio/min/Maze.png" class="img-responsive" alt="6">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Aplicación de escritorio
                                </div>
                                <div class="project-name">
                                    Michael Meléndez y Yunen Ramos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/mosaic.png" class="portfolio-box" data-lightbox="image-7" data-title="Aplicación de escritorio">
                        <img src="img/portfolio/min/mosaic.png" class="img-responsive" alt="7">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Aplicación de escritorio
                                </div>
                                <div class="project-name">
                                    Michael Meléndez y Joseph Cordero
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/Buscaminas.png" class="portfolio-box" data-lightbox="image-8" data-title="Aplicación de escritorio">
                        <img src="img/portfolio/min/Buscaminas.png" class="img-responsive" alt="8">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Aplicación de escritorio
                                </div>
                                <div class="project-name">
                                    Edwin Navarro Barahona
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <a href="img/portfolio/Arduino.jpg" class="portfolio-box" data-lightbox="image-9" data-title="Programación de hardware libre">
                        <img src="img/portfolio/min/Arduino.jpg" class="img-responsive" alt="9">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Programación de hardware
                                </div>
                                <div class="project-name">
                                    Michael Meléndez y Joseph Cordero
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
            <h2>Demostración</h2>
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
                    <button type="button" class="btn btn-primary" 
                            onclick="changeColor('team')">Panel</button>
                    <button type="button" class="btn btn-success" 
                            onclick="changeColor('myMenu')">Menú</button>
                    <button type="button" class="btn btn-default" 
                            onclick="removeChange()">Restaurar</button>
                </div>
            </div>
        </div>
        <div class="container">
        	<div class="fb-comments" data-href="http://inemtu.com/" data-numposts="5" data-order-by="social"></div>
        </div>
    </section>
    <!-- Footer
	============================================= -->
    <footer id="footer">
        <div class="container">
            <h6 >&copy; 2016 INEMTU: Informática Empresarial Turrialba</h6>
                <!-- Trigger the modal with a button -->
                <button type="button" class="btn btn-info btn-lg"
                        data-toggle="modal" data-target="#myModal"
                        style="background-color: #24242A;">Desarrolladores</button>

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
                                <h6 class="text-primary"><a href="https://www.facebook.com/yunenrr" target="_blank">Yunen Ramos Ramírez</a></h6>
                                <h6 class="text-primary"><a href="https://www.facebook.com/jessika.moralesmadrigal" target="_blank">Karen Calderón Calvo</a></h6>
                                <h6 class="text-primary"><a href="https://www.facebook.com/michael.melendezm" target="_blank">Jessika Morales Madrigal</a></h6>
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
    <script src="js/jquery.easing.min.js"></script>
    <script src="plugins/inview/jquery.inview.min.js"></script>
    <script src="plugins/Lightbox/dist/js/lightbox.min.js"></script>
    <script src="plugins/WOW/dist/wow.min.js"></script>
    <script async src="./js/jsButtons.js"></script>
    <script>
        var imageAppEsc = '<img class="img-responsive" src="./img/portfolio/ListImagenes.png">';
        $('#iconAppEsc').popover({placement: 'top', content: imageAppEsc,trigger: "hover", html: true});
        
        var imageDesWeb = '<img class="img-responsive" src="./img/portfolio/web-app.png">';
        $('#iconDesWeb').popover({placement: 'top', content: imageDesWeb,trigger: "hover", html: true});

        var imageDatBas = '<img class="img-responsive" src="./img/portfolio/filesbasededatos.png">';
        $('#iconDatBas').popover({placement: 'top', content: imageDatBas,trigger: "hover", html: true});
        
        var imageAppM = '<img class="img-responsive" src="./img/portfolio/mobile-apps.jpg">';
        $('#iconAppM').popover({placement: 'top', content: imageAppM,trigger: "hover", html: true});
        
        var imageHardwareF = '<img class="img-responsive" src="./img/portfolio/maxresdefault.jpg">';
        $('#iconHardwareF').popover({placement: 'top', content: imageHardwareF,trigger: "hover", html: true});

        var imageEnfE = '<img class="img-responsive" src="./img/portfolio/empresa.jpg">';
        $('#iconEnfE').popover({placement: 'top', content: imageEnfE,trigger: "hover", html: true});
    </script>
</body>

</html>