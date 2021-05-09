<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>Portfolio - Cumonor</title>

    <!-- Description de esta página -->
    <meta name="description" content="FALTA">

    <!-- URL canónica de esta página -->
    <link rel="canonical" href="https://cumonor.es/proyectos-realizados.php">


    <!-- AMP Preloads -->
    <?php include 'include/head-tag-preloads.php';?>

    <!-- AMP Preloads: Hero image (Preload an important image in the first viewport to improve page load time.) -->
    <!-- Referencia: https://developer.mozilla.org/en-US/docs/Web/HTML/Preloading_content -->
    <!-- <link rel="preload" href="images/logo/cumonor-cubiertas-y-montajes-norte-s.l.-logo-con-texto-en-una-linea.png" as="image"> -->

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
        "width": 300,
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




    <main class="py-5" role="main">

        <div id="welcome-blurb">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h1>Proyectos realizados</h1>

                        <!-- <p class="text-center">Más de 110 proyectos durante nuestros 30 años de experiencia.</p> -->
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-12 col-md-4">

                    <div class="tarjeta-con-sombra-y-zoom-en-hover">
                        <a href="proyecto-ikea-valladolid.php">
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-miniatura.jpg"
                                width="400"
                                height="300"
                                layout="intrinsic"
                                alt="IKEA (Valladolid)">
                            </amp-img>
                            <div class="informacion">
                                <h3>IKEA</h3>
                                <div class="ubicacion">Valladolid</div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <div class="tarjeta-con-sombra-y-zoom-en-hover">
                        <a href="proyecto-centro-logistico-coca-cola-badajoz.php">
                            <amp-img src="images/proyectos-realizados/centro-logistico-coca-cola-badajoz/centro-logistico-coca-cola-badajoz-miniatura.jpg"
                                width="400"
                                height="300"
                                layout="intrinsic"
                                alt="Centro logístico Coca-Cola (Badajoz)">
                            </amp-img>
                            <div class="informacion">
                                <h3>Centro logístico Coca-Cola</h3>
                                <div class="ubicacion">Badajoz</div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <div class="tarjeta-con-sombra-y-zoom-en-hover">
                        <a href="proyecto-pascual-ubicacion.php">
                            <amp-img src="images/placeholder.jpg"
                                width="400"
                                height="300"
                                layout="intrinsic"
                                alt="Pascual (¿Ubicación?)">
                            </amp-img>
                            <div class="informacion">
                                <h3>Pascual</h3>
                                <div class="ubicacion">¿Ubicación?</div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-4">

                    <div class="tarjeta-con-sombra-y-zoom-en-hover">
                        <a href="proyecto-grupo-siro-medina-del-campo-valladolid.php">
                            <amp-img src="images/proyectos-realizados/grupo-siro-medina-del-campo-valladolid/grupo-siro-medina-del-campo-valladolid-miniatura.jpg"
                                width="400"
                                height="300"
                                layout="intrinsic"
                                alt="Grupo SIRO (Medina del Campo, Valladolid)">
                            </amp-img>
                            <div class="informacion">
                                <h3>Grupo SIRO</h3>
                                <div class="ubicacion">Medina del Campo, Valladolid</div>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-4">

                    <div class="tarjeta-con-sombra-y-zoom-en-hover">
                        <a href="proyecto-galletas-gullon-ubicacion.php">
                            <amp-img src="images/proyectos-realizados/galletas-gullon-ubicacion/galletas-gullon-ubicacion-miniatura.jpg"
                                width="400"
                                height="300"
                                layout="intrinsic"
                                alt="Galletas Gullón (¿Ubicación?)">
                            </amp-img>
                            <div class="informacion">
                                <h3>Galletas Gullón</h3>
                                <div class="ubicacion">¿Ubicación?</div>
                            </div>
                        </a>
                    </div>
                    
                </div>
                <div class="col-12 col-md-4">

                    <div class="tarjeta-con-sombra-y-zoom-en-hover">
                        <a href="proyecto-pista-de-fronton-aleamayor-valladolid.php">
                            <amp-img src="images/proyectos-realizados/pista-de-fronton-aleamayor-valladolid/pista-de-fronton-aleamayor-valladolid-miniatura.jpg"
                                width="400"
                                height="300"
                                layout="intrinsic"
                                alt="Pista de Frontón (Aleamayor, Valladolid)">
                            </amp-img>
                            <div class="informacion">
                                <h3>Pista de Frontón</h3>
                                <div class="ubicacion">Aleamayor, Valladolid</div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
            

            <!-- Plantilla: Carousel con todo -->
            <!-- <amp-state id="carousel">
                <script type="application/json">
                    {
                        "selectedSlide": 0
                    }
                </script>
            </amp-state>

            <amp-carousel on="slideChange:AMP.setState({carousel: {selectedSlide:event.index}})"
                [slide]="carousel.selectedSlide" lightbox id="imageSlides" layout="responsive"
                width="412" height="329" type="slides" loop>
                <div class="slide">
                    <amp-img src="https://cdn.glitch.com/d7f46a57-0ca4-4cca-ab0f-69068dec6631%2Fcheddar-chaser.jpg?1540228205366"
                        width="412" height="309" layout="responsive"></amp-img>
                    <amp-fit-text layout="responsive"
                        width="412"
                        height="20">This is the image caption.</amp-fit-text>
                </div>
                <div class="slide">
                    <amp-img src="https://cdn.glitch.com/d7f46a57-0ca4-4cca-ab0f-69068dec6631%2Fcheese-thumb.jpg?1540228249992"
                        width="412" height="309" layout="responsive"></amp-img>
                    <amp-fit-text layout="responsive"
                        width="412"
                        height="20">This is the image caption.</amp-fit-text>
                </div>
                <div class="slide">
                    <amp-img src="https://cdn.glitch.com/d7f46a57-0ca4-4cca-ab0f-69068dec6631%2Fmouse-thumb.jpg?1540228249062"
                        width="412" height="309" layout="responsive"></amp-img>
                    <amp-fit-text layout="responsive"
                        width="412"
                        height="20">This is the image caption.</amp-fit-text>
                </div>
            </amp-carousel>

            <amp-selector id="ampSelector" [selected]="carousel.selectedSlide"
                on="select:AMP.setState({carousel: {selectedSlide:event.targetOption}})">
                <amp-carousel layout="fixed-height" height="20" class="thumbnail-carousel">
                    <amp-img src="https://cdn.glitch.com/d7f46a57-0ca4-4cca-ab0f-69068dec6631%2Fcheddar-chaser-thumb.jpg?1540228250623"
                        option="0" selected role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                    <amp-img src="https://cdn.glitch.com/d7f46a57-0ca4-4cca-ab0f-69068dec6631%2Fcheese-thumb.jpg?1540228249992"
                        option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                    <amp-img src="https://cdn.glitch.com/d7f46a57-0ca4-4cca-ab0f-69068dec6631%2Fmouse-thumb.jpg?1540228249062"
                        option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                </amp-carousel>
            </amp-selector>

            <p [text]="'Slide ' + (carousel.selectedSlide + 1) + ' of 3'">
                Slide 1 of 3
            </p> -->


        </div>
        
    </main>


    <?php include 'include/footer-tag.php';?>


</body>

</html>