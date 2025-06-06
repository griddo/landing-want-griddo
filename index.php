<?php
/* csrf */
if (session_status() === PHP_SESSION_NONE) {
        session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
/* end csrf */
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:title" content="Want ✨ Griddo. Alianza para transformar la experiencia digital en la educación superior en Chile" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Griddo ✨ Want. Una oportunidad única para adelantarse, liderar la innovación y transformar la experiencia digital de estudiantes, docentes y comunidades." />
    <meta property="og:image" content="https://example.com/ogp.jpg" />
    <meta property="og:image:secure_url" content="https://iwantgriddo.cl/assets/images/opengraph-card.jpg" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="iwantgriddo lema de la alianza" />

    <link rel="icon" type="image/x-icon" href="https://iwantgriddo.cl/assets/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link href="https://fonts.googleapis.com/css?family=Figtree:100,300,400,500,700,900" rel="stylesheet">
    

    <title>Griddo Digital x Want</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js?render=6LeQYjcrAAAAAB6wrRx7n4OBaoNv11Jd_PiDOjtq"></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="assets/images/navbar-logo.svg" alt="Griddo & Want"/>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#welcome" class="active">Alianza</a></li>
                            <li><a href="#features">Beneficios</a></li>
                            <li><a href="#work-process">Proceso</a></li>
                            <li><a href="#testimonials">Testimonios</a></li>
                            <li><a href="#contact-us">Próximamente</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <!-- <p class="lema">iwantgriddo</p> -->
                        <img class="logo" src="assets/images/iwantgriddo-white.svg">
                        <h1>unidos para <strong>transformar</strong><br>la experiencia digital<br> en la educación superior</h1>
                        <img src="assets/images/griddo-magic-want.svg">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                 <!--
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                -->
                                <h5 class="features-title">Experiencia<br><strong>probada</strong></h5>
                                <p>Trabajamos junto a las Universidades de mayor prestigio.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                 <!--
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                -->
                                <h5 class="features-title">Calidad <br><strong>demostrada</strong></h5>
                                
                                <p>Tecnología Cloud de última generación, robusta y segura.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                 <!--
                                <div class="icon">
                                    <i><img src="assets/images/featured-item-01.png" alt=""></i>
                                </div>
                                -->
                                <h5 class="features-title">Personalización<br><strong>absoluta</strong></h5>
                                <p>Respondemos a las necesidades singulares de cada institución y elevamos su marca.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image-1.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title marketing">Solución <strong>integral</strong>, pensada para universidades.</h2>
                    </div>
                    <div class="left-text">
                        <p>Griddo centraliza la gestión de todos los sitios web institucionales en una sola plataforma Cloud, moderna, dinámica y escalable.</p>
                        <p>Con Want como partner, aseguramos una implementación ágil, contextualizada y alineada a los objetivos de cada universidad.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title comms"><strong>Colaboración</strong> local, impacto real</h2>
                    </div>
                    <div class="left-text">
                        <p>Gracias a nuestra alianza, las universidades acceden a tecnología no-code de última generación, y cuentan con un equipo cercano que les guía en cada paso.</p>
                        <p>Una colaboración que libera al equipo técnico, empodera al de marketing y comunicación para transformar la experiencia digital educativa.</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right-image-1.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
     <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image-2.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title tech">Integración sin límites en tu ecosistema. Con toda <strong>seguridad</strong></h2>
                    </div>
                    <div class="left-text">
                        <p>Griddo se adapta a tu infraestructura, conectándose con las herramientas y sistemas internos que ya utilizas. Crea nuevas integraciones para multiplicar la eficiencia.</p>
                        <p>Centraliza las fuentes de información y optimiza los flujos de trabajo, asegurando que la comunicación y gestión de datos se mantenga alineada y actualizada. Siempre.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Hazlo simple: construye, escala con Griddo y <strong>brilla</strong> con Want</h1>
                            <p>Tenemos la experiencia y un proceso probado que te permitirá migrar tu ecosistema web a Griddo en un tiempo récord.</p>
                        </div>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <div class="mini-number">
                                <span>1</span>
                            </div>
                            <strong>Investigar</strong>
                            <span>Entender las necesidades</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <div class="mini-number">
                                <span>2</span>
                            </div>
                            <strong>Diseñar</strong>
                            <span>Arquitectura y Línea Visual</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <div class="mini-number">
                                <span>3</span>
                            </div>
                            <strong>Definir</strong>
                            <span>Estructura y Roadmap</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <div class="mini-number">
                                <span>4</span>
                            </div>
                            <strong>Implantar</strong>
                            <span>Sistema Modular y Contenidos</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <div class="mini-number">
                                <span>5</span>
                            </div>
                            <strong>Conectar</strong>
                            <span>Formularios CRM y Servicios.</span>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="mini-box">
                            <div class="mini-number">
                                <span>6</span>
                            </div>
                            <strong>Lanzar</strong>
                            <span>Validación y formación.</span>
                        </a>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->

    <!-- ***** Testimonials Start ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="left-heading">
                        <h2 class="small-section-title"><strong>CONFIAN EN NOSOTROS</strong></h2>
                    </div>
                </div>
                <div class="offset-lg-0 col-lg-9">
                    <div class="left-title">
                        <p>Universidades líderes eligen Griddo. Expertos digitales apuestan por Want.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>Griddo es una herramienta muy intuitiva, que nos ha permitido <span>escalar</span> nuestros proyectos web. La gestión del contenido es muy sencilla y visual.</p>
                            <div class="user-image">
                                <img src="assets/images/testimonial-lorena.png" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Lorena Gómez</h3>
                                <span>Web Project Manager<br> Universidad Europea</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
                
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon-o.png" alt=""></i>
                            <p>El cuidado exquisito del diseño, tanto de interacción como visual, que hace Want <span>eleva</span> la imagen de marca en nuestros proyectos web.</p>
                            <div class="user-image">
                                <img src="assets/images/testimonial-oscar.png" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Oscar Adaros</h3>
                                <span>Brand Manager Corporativo<br> Universidad Adolfo Ibañez</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
                
                <!-- ***** Testimonials Item Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i><img src="assets/images/testimonial-icon.png" alt=""></i>
                            <p>Griddo nos ayuda a incrementar la rapidez y efectividad con que creamos y gestionamos nuestras webs. Además es técnicamente <span>robusta</span>, lo que es crucial. </p>
                            <div class="user-image">
                                <img src="assets/images/testimonial-daniel.png" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Daniel Perales</h3>
                                <span>Website Manager<br> IE University</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Testimonials Item End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Testimonials End ***** -->

    <!-- ***** UNI LOGOS start ***** -->
    <section class="uni" id="uni-logos">
        <div class="uni-content">
            <div class="container">
                <!-- ***** Uni Box Start ***** -->
                <div class="center-heading">
                    <h2 class="small-section-title"><strong>COLABORAN CON WANT</strong></h2>
                </div>
                <div class="row">
                    <div class="offset-lg-1 col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-uai.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-magallanes.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-uab.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-umayor.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-inacap.svg" alt=""></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-lg-1 col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-usm.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-udc.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-austral-de-chile.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-uss.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-valparaiso.svg" alt=""></i>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
                <div class="center-heading section-title">
                    <h2 class="small-section-title"><strong>IMPULSADAS CON GRIDDO</strong></h2>
                </div>
                <div class="row">
                    <div class="offset-lg-1 col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-ie.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-ucma.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-ue.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-cunef.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-comillas.svg" alt=""></i>
                        </a>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hr"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-lg-2 col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-iade_es.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-garrigues.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-iade.svg" alt=""></i>
                        </a>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <a href="#" class="uni-box">
                            <i><img src="assets/images/logo-uni-ipam.svg" alt=""></i>
                        </a>
                    </div>
                </div>
                <!-- ***** Uni Box End ***** -->
                 
            </div>
        </div>
    </section>
    <!-- *****  UNI LOGOS End ***** -->

    <!-- ***** Counter Parallax Start ***** -->
    <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="count-item">
                            <span>Webs alojadas en Griddo</span>
                            <strong>62</strong>
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="count-item">
                            <span>Páginas construidas con Griddo</span>
                            <strong>63.000</strong>
                            
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-12">
                        <div class="count-item">
                            <span>Instituciones Educativas</span>
                            <strong>12</strong>
                            
                        </div>
                    </div>
                    <div class="col-lg-6 counter-frame">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="pill-image">
                                <img src="assets/images/users-pill.png" width="160"alt="">
                            </div>
                            <div class="count-item">
                                <span>Usuarios activos en Griddo</span>
                                <strong>367</strong>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="user-image">
                                <i><img src="assets/images/griddo-user-2.png" alt=""></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Counter Parallax End ***** -->   


    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <div class="section-title">
                            <h2>Próximamente seminario <strong>gratuito</strong> :<br>Optimiza la conversión web</h2>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Vamos a mostrar estrategias probadas para que puedas optimizar tu conversión web y eliminar cuellos de en tu proceso de trabajo.<br>
                            Mejora tu estrategia <strong>digital</strong> para universidades. ¡Apuntate!</p>
                    </div>
                </div>
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">
                <!-- ***** Contact Text Start ***** -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="margin-bottom-30"><span style="color: #FAF9F6">MIÉRCOLES 28 MAYO 10:00 A.M.</span></h5>
                    <div class="contact-text">
                        <p>
                        Inscríbete en el semaniario. Te mostraremos cómo puedes revolucionar el marketing digital de tu institución. </p>
                        <p>Lidera la transformación digital en la comunicación y la captación de tu universidad de la mano de Want y Griddo.</p>
                    </div> 
                </div>
                <!-- ***** Contact Text End ***** -->

                <!-- ***** Contact Form Start ***** -->

                <div class="col-lg-8 col-md-6 col-sm-12">
                    <div class="contact-form">
                        <form id="contactForm" action="process.php" method="POST">
                           <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
                          <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Nombre y Apellidos*" required="" maxlength="100" minlength="1">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail*" required="" maxlength="100" minlength="1">
                              </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <fieldset>
                                <input name="university" type="text" class="form-control" id="university" placeholder="Nombre de la Institución*" required="" maxlength="100" minlength="1">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                            <fieldset>
                                <input name="cargo" type="text" class="form-control" id="cargo" placeholder="Cargo*" required="" maxlength="100" minlength="1">
                            </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="Teléfono Móvil" required="" maxlength="15" minlength="1">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 d-flex align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="wantMoreInfo" id="wantMoreInfo" value="1">
                                    <label class="form-check-label text-white ms-2" for="wantMoreInfo">
                                    Quiero recibir más información
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Quiero Asistir</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                        <div class="form-message my-3 hide"></div>
                    </div>
                </div>
                <!-- ***** Contact Form End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Contact Us End ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 social">
                    <a href="https://griddo.io">
                        <img src="assets/images/logo-griddo-w.png">
                    </a>
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/company/griddo/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://x.com/griddo_"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 social">
                    <a href="https://want.cl">
                        <img src="assets/images/logo-want-w.png">
                    </a>    
                    <ul class="social">
                        <li><a href="https://www.linkedin.com/company/want-digital/"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.instagram.com/want.cl/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p class="copyright">Copyright &copy; 2025 Griddo - Design: Want</p>
                </div>
                <div class="col-lg-12">

                    <img class="logo" src="assets/images/iwantgriddo-white.svg">
                </div>
            </div>
        </div>
    </footer>
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

  </body>
</html>