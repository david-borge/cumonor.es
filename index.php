<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>Cumonor - Cubiertas y Montajes Norte s.l.</title>

    <!-- Description de esta página -->
    <meta name="description" content="FALTA">

    <!-- URL canónica de esta página -->
    <link rel="canonical" href="https://cumonor.es/">


    <!-- AMP Preloads -->
    <?php include 'include/head-tag-preloads.php';?>

    <!-- AMP Preloads: Hero image (Preload an important image in the first viewport to improve page load time.) -->
    <!-- Referencia: https://developer.mozilla.org/en-US/docs/Web/HTML/Preloading_content -->
    <!-- <link rel="preload" href="images/cumonor-cubiertas-y-montajes-norte-s.l.--logo-con-texto-en-una-linea.png" as="image"> -->

    <!-- AMP script principal -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>

    <!-- Import other AMP Extensions here -->
    <!-- TODO: quitar las innecesarias. -->
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <script async custom-element="amp-lightbox-gallery" src="https://cdn.ampproject.org/v0/amp-lightbox-gallery-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
    

    <!-- Head Tag Styles: Fuentes + iconos + favicon + CSS de AMP para cargar las páginas, incluyendo la animación inicial -->
    <?php include 'include/fuentes-iconos-favicon-y-css-de-amp.php';?>

    <!-- Estilos generales + Estilos de esta página -->
    <style amp-custom>

        /* Estilos generales - Producción */
        /* TODO: descomentar esta línea en producción. */
        <?php //include 'css/style.min.css';?>

        /* Estilos generales - Desarrollo */
        /* TODO: comentar esta línea en producción. */
        <?php include 'css/style.css';?>

        /* Welcome Blurb */
        #welcome-blurb {
            background-image: url(images/inicio/cumonor-cubiertas-y-montajes-norte-s.l.--tejado.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position-y: center;

            box-shadow: inset 0 0 0px 5000px #0000004d;
        }

        #welcome-blurb .col-12 {
            min-height: 40vh;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        #welcome-blurb amp-img {
            max-width: 800px;
        }

        #welcome-blurb h1 {
            margin-bottom: 14px;
            color: white;
            font-size: 3.9rem;
            text-align: center;
            font-weight: bold;
            text-shadow: 0 0 5px black;
        }

        #welcome-blurb p {
            margin: 0;
            font-family: 'Raleway', Arial, Helvetica, sans-serif;
            font-size: 27px;
            font-weight: bold;
            color: white;
            letter-spacing: 1px;
            text-shadow: 0 0 5px black;
        }
        /* Fin de: Welcome blurb */

        /* ¿Por qué Cumonor? */
        #por-que-cumonor {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        #por-que-cumonor #ventajas {
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
        }

        #por-que-cumonor .ventaja {
            padding-right: 15px;
            padding-left: 15px;
        }

        #por-que-cumonor .ventaja p {
            font-size: 17px;
            font-weight: 500;
            line-height: 1.23536;
            letter-spacing: -.022em;
            color: #888;
        }

        #por-que-cumonor .ventaja.numero p:first-child {
            margin-bottom: 0;
        }

        #por-que-cumonor .ventaja.texto p:first-child {
            margin-bottom: 3px;
        }

        #por-que-cumonor .ventaja.numero h3 {
            font-size: 80px;
            font-weight: 700;
            line-height: 1;
            letter-spacing: -.015em;
            color: #3c2a96;
        }

        #por-que-cumonor .ventaja.texto h3 {
            font-size: 35px;
            font-weight: 700;
            line-height: 1.1;
            letter-spacing: -.015em;
            margin-bottom: 16px;
            color: #3c2a96;
        }

        #por-que-cumonor .ventaja .subtitulo {
            font-size: 19px;
            font-weight: 700;
            letter-spacing: 0;
            color: #3c2a96;
        }
        /* Fin de: ¿Por qué Cumonor? */

        /* Todos nuestros servicios */
        #servicios {
            padding: 50px 0;
        }

        #servicios .servicio {
            margin: auto;
            width: fit-content;
            transition: all .2s ease-in-out;
        }

        #servicios .servicio:hover {
            transform: scale(1.015);
        }

        #servicios .servicio>a {
            position: relative;
        }

        #servicios .servicio>a>div {
            position: absolute;
            bottom: 3px;
            left: 0;
            width: 100%;
            min-height: 60px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: inset 0 0 40px 100px #ffffff85;
            border-top-right-radius: 15%;
            border-top-left-radius: 15%;
        }

        #servicios h3 {
            color: #3c2a96;
            font-weight: bold;
            text-align: center;
        }
        /* Fin de: Todos nuestros servicios */

        /* Portfolio */
        #proyectos-realizados {
            padding: 50px 0;
        }

        .portfolio-item {
            background: #3c2a96;
        }

        .portfolio-item amp-selector amp-img:not([selected]) {
            filter: grayscale(1);
        }
        /* Fin de: Portfolio */

    </style>


    <!-- Structured Data: Provide information about your page and classify the page content using structured data. -->
    <!-- Referencia: https://developers.google.com/search/docs/guides/intro-structured-data -->
    <!-- Referencias:
            · Página web: https://schema.org/WebPage
            · 
    -->
    <!-- TODO: REVISAR DATOS DE image Y PONER BREADCRUMB, CAROUSEL, FAQ, IMAGE LICENSE METADATA, LOCAL BUSINESS, LOGO y PRODUCT. -->
    <!-- TODO: cuando tenga mi empresa, cambiar el publiser a los datos de la empresa. -->
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Webpage",
        "url": "https://cumonor.es/",
        "name": "Cumonor - Cubiertas y Montajes Norte s.l.",
        "headline": "Cubiertas y Montajes Norte s.l.",
        "description": "Cubiertas y Montajes Norte s.l.",
        "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://cumonor.es/"
        },
        "publisher": {
        "@type": "Organization",
        "name": "Cumonor - Cubiertas y Montajes Norte s.l.",
        "logo": {
            "url": "https://cumonor.es/images/cumonor-cubiertas-y-montajes-norte-s.l.-logo-con-texto.jpg",
            "width": 435,
            "height": 337,
            "@type": "ImageObject"
        }
        },
        "image": {
        "@type": "ImageObject",
        "url": "https://cumonor.es/leader.png",
        "width": 1200,
        "height": 630
        }
    }
    </script>


    <!-- AMP Analytics -->
    <?php include 'include/google-tag-manager-head-script.php';?>


</head>

<body id="<?= basename(__FILE__, '.php'); ?>">


    <!-- Google Tag Manager -->
    <?php include 'include/google-tag-manager-body-tag.php';?>

    <!-- Navbar y sidebar -->
    <?php include 'include/navbar-y-sidebar.php';?>


    <main role="main">

        <div id="welcome-blurb">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h1>Cumonor</h1>

                        <p class="text-center">Diseño, fabricación y montaje <br>de estructuras y cerramientos metálicos.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div id="por-que-cumonor" class="row">
                <div class="col-12">

                    <h2>¿Por qué Cumonor?</h2>
                    <div class="h2-separador">
                        <div class="h2-separador-inner"></div>
                    </div>

                    <div id="ventajas">

                        <div class="ventaja numero">
                            <p>Más de</p>
                            <h3 style='margin-left: -8px;'>110</h3>
                            <p class="subtitulo">Proyectos realizados</p>
                            <p>Para IKEA, Coca-Cola, Pascual, Siro, Gullón y muchos otros.</p>
                        </div>

                        <div class="ventaja numero">
                            <p>Más de</p>
                            <h3 style='margin-left: -4px;'>30</h3>
                            <p class="subtitulo">Años de experiencia</p>
                            <p>Nacidos de la fusión de Montajes JuanFran S.L. y XXXXX.</p>
                        </div>

                        <div class="ventaja texto">
                            <p>Contamos con</p>
                            <h3>Maquinaria propia</h3>
                            <p>[Breve texto respecto a la maquinaria propia.]</p>
                        </div>

                        <div class="ventaja texto">
                            <p>Y con un</p>
                            <h3>Equipo profesional</h3>
                            <p>Altamente cualificado.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div id="servicios" class="row">
                <div class="col-12">

                    <h2>Servicios</h2>
                    <div class="h2-separador">
                        <div class="h2-separador-inner"></div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="estructuras-metalicas.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Estructuras Metálicas">
                                    </amp-img>
                                    <div>
                                        <h3>Estructuras Metálicas</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="cubiertas.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Cubiertas">
                                    </amp-img>
                                    <div>
                                        <h3>Cubiertas</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="reformas.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Reformas">
                                    </amp-img>
                                    <div>
                                        <h3>Reformas</h3>
                                    </div>
                                </a>
                            </div>
                            
                        </div>
                    </div>

                    <div class="row" style='margin-top: 30px;'>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="reparaciones.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Reparaciones">
                                    </amp-img>
                                    <div>
                                        <h3>Reparaciones</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="limpieza-y-mantenimiento-de-naves-industriales.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Limpieza y Mantenimiento de Naves Industriales">
                                    </amp-img>
                                    <div>
                                        <h3>Limpieza y Mantenimiento <br>de Naves Industriales</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="naves-agricolas.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Naves Agrícolas">
                                    </amp-img>
                                    <div>
                                        <h3>Naves Agrícolas</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="row" style='margin-top: 30px;'>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="limpieza-y-mantenimiento-de-viviendas.php">
                                    <amp-img src="images/placeholder.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Limpieza y Mantenimiento de Viviendas">
                                    </amp-img>
                                    <div>
                                        <h3>Limpieza y Mantenimiento <br>de Viviendas</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="col-12 col-md-4">

                            <div class="servicio">
                                <a href="taller-de-reparacion-de-maquinaria-agricola.php">
                                    <amp-img src="images/inicio/servicios/taller-de-reparacion-de-maquinaria-agricola.jpg"
                                        width="600"
                                        height="410"
                                        layout="intrinsic"
                                        alt="Taller de reparación de maquinaria agrícola">
                                    </amp-img>
                                    <div>
                                        <h3>Taller de reparación <br>de maquinaria agrícola</h3>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div id="proyectos-realizados" class="row">
                <div class="col-12">

                    <h2>Portfolio</h2>
                    <div class="h2-separador">
                        <div class="h2-separador-inner"></div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <div class="portfolio-item">
                                <h3 class="titulo-portfolio-item">IKEA (Valladolid)</h3>

                                <amp-state id="carousel1">
                                    <script type="application/json">
                                        {
                                            "selectedSlide": 0
                                        }
                                    </script>
                                </amp-state>

                                <amp-carousel on="slideChange:AMP.setState({carousel1: {selectedSlide:event.index}})"
                                    [slide]="carousel1.selectedSlide" lightbox id="imageSlides1" layout="intrinsic"
                                    width="1600" height="1200" type="slides" loop>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-01.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-02.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-03.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-04.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-05.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                </amp-carousel>

                                <amp-selector id="ampSelector" [selected]="carousel1.selectedSlide"
                                    on="select:AMP.setState({carousel1: {selectedSlide:event.targetOption}})">
                                    <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-01.jpg" selected
                                            option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-02.jpg"
                                            option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-03.jpg"
                                            option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-04.jpg"
                                            option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-1--ikea/ikea-05.jpg"
                                            option="4" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                    </amp-carousel>
                                </amp-selector>
                            </div>

                        </div>
                        <div class="col-12 col-md-6">

                            <div class="portfolio-item">
                                <h3 class="titulo-portfolio-item">Centro logístico Coca-Cola (Badajoz)</h3>
                                
                                <amp-state id="carousel2">
                                    <script type="application/json">
                                        {
                                            "selectedSlide": 0
                                        }
                                    </script>
                                </amp-state>

                                <amp-carousel on="slideChange:AMP.setState({carousel2: {selectedSlide:event.index}})"
                                    [slide]="carousel2.selectedSlide" lightbox id="imageSlides2" layout="intrinsic"
                                    width="1600" height="1200" type="slides" loop>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-01.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-02.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-03.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-04.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                    <div class="slide">
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-05.jpg"
                                            width="1600" height="1200" layout="intrinsic"></amp-img>
                                    </div>
                                </amp-carousel>

                                <amp-selector id="ampSelector" [selected]="carousel2.selectedSlide"
                                    on="select:AMP.setState({carousel2: {selectedSlide:event.targetOption}})">
                                    <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-01.jpg" selected
                                            option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-02.jpg"
                                            option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-03.jpg"
                                            option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-04.jpg"
                                            option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                        <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-05.jpg"
                                            option="4" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                    </amp-carousel>
                                </amp-selector>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 boton-ver-todo">
                            <a href="portfolio.php">Ver todo el portfolio</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        
    </main>


    <?php include 'include/footer-tag.php';?>


</body>

</html>