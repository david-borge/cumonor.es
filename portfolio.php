<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>Portfolio - Cumonor</title>

    <!-- Description de esta página -->
    <meta name="description" content="FALTA">

    <!-- URL canónica de esta página -->
    <link rel="canonical" href="https://cumonor.es/portfolio.php">


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




    <main class="py-5" role="main">

        <div id="welcome-blurb">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h1>Portfolio</h1>

                        <p class="text-center">Proyectos realizados</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

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
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-06.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-07.jpg"
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
                                <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-06.jpg"
                                    option="5" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-2--coca-cola/coca-cola-07.jpg"
                                    option="6" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            </amp-carousel>
                        </amp-selector>

                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                
                    <div class="portfolio-item">
                        <h3 class="titulo-portfolio-item">Pascual (Ubicación?)</h3>
                        
                        <amp-state id="carousel3">
                            <script type="application/json">
                                {
                                    "selectedSlide": 0
                                }
                            </script>
                        </amp-state>

                        <amp-carousel on="slideChange:AMP.setState({carousel3: {selectedSlide:event.index}})"
                            [slide]="carousel3.selectedSlide" lightbox id="imageSlides3" layout="intrinsic"
                            width="1600" height="1200" type="slides" loop>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-01.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-02.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-03.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-04.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-05.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                        </amp-carousel>

                        <amp-selector id="ampSelector" [selected]="carousel3.selectedSlide"
                            on="select:AMP.setState({carousel3: {selectedSlide:event.targetOption}})">
                            <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-01.jpg" selected
                                    option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-02.jpg"
                                    option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-03.jpg"
                                    option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-04.jpg"
                                    option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-3--pascual/pascual-05.jpg"
                                    option="4" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            </amp-carousel>
                        </amp-selector>

                    </div>

                </div>
                <div class="col-12 col-md-6">
                    
                    <div class="portfolio-item">
                        <h3 class="titulo-portfolio-item">Grupo SIRO (Medina del Campo)</h3>
                        
                        <amp-state id="carousel4">
                            <script type="application/json">
                                {
                                    "selectedSlide": 0
                                }
                            </script>
                        </amp-state>

                        <amp-carousel on="slideChange:AMP.setState({carousel4: {selectedSlide:event.index}})"
                            [slide]="carousel4.selectedSlide" lightbox id="imageSlides4" layout="intrinsic"
                            width="1600" height="1200" type="slides" loop>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-01.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-02.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-03.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-04.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-05.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-06.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-07.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-08.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                        </amp-carousel>

                        <amp-selector id="ampSelector" [selected]="carousel4.selectedSlide"
                            on="select:AMP.setState({carousel4: {selectedSlide:event.targetOption}})">
                            <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-01.jpg" selected
                                    option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-02.jpg"
                                    option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-03.jpg"
                                    option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-04.jpg"
                                    option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-05.jpg"
                                    option="4" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-06.jpg"
                                    option="5" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-07.jpg"
                                    option="6" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-4--siro/siro-08.jpg"
                                    option="7" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            </amp-carousel>
                        </amp-selector>

                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    
                    <div class="portfolio-item">
                        <h3 class="titulo-portfolio-item">Galletas Gullón (Ubicación?)</h3>
                        
                        <amp-state id="carousel5">
                            <script type="application/json">
                                {
                                    "selectedSlide": 0
                                }
                            </script>
                        </amp-state>

                        <amp-carousel on="slideChange:AMP.setState({carousel5: {selectedSlide:event.index}})"
                            [slide]="carousel5.selectedSlide" lightbox id="imageSlides5" layout="intrinsic"
                            width="1600" height="1200" type="slides" loop>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-01.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-02.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-03.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-04.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-05.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-06.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-07.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-08.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-09.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                        </amp-carousel>

                        <amp-selector id="ampSelector" [selected]="carousel5.selectedSlide"
                            on="select:AMP.setState({carousel5: {selectedSlide:event.targetOption}})">
                            <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-01.jpg" selected
                                    option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-02.jpg"
                                    option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-03.jpg"
                                    option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-04.jpg"
                                    option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-05.jpg"
                                    option="4" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-06.jpg"
                                    option="5" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-07.jpg"
                                    option="6" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-08.jpg"
                                    option="7" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-5--gullon/gullon-09.jpg"
                                    option="8" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            </amp-carousel>
                        </amp-selector>

                    </div>

                </div>
                <div class="col-12 col-md-6">
                    
                    <div class="portfolio-item">
                        <h3 class="titulo-portfolio-item">Pista de Frontón (Aleamayor)</h3>
                        
                        <amp-state id="carousel6">
                            <script type="application/json">
                                {
                                    "selectedSlide": 0
                                }
                            </script>
                        </amp-state>

                        <amp-carousel on="slideChange:AMP.setState({carousel6: {selectedSlide:event.index}})"
                            [slide]="carousel6.selectedSlide" lightbox id="imageSlides6" layout="intrinsic"
                            width="1600" height="1200" type="slides" loop>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-01.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-02.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-03.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                            <div class="slide">
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-04.jpg"
                                    width="1600" height="1200" layout="intrinsic"></amp-img>
                            </div>
                        </amp-carousel>

                        <amp-selector id="ampSelector" [selected]="carousel6.selectedSlide"
                            on="select:AMP.setState({carousel6: {selectedSlide:event.targetOption}})">
                            <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-01.jpg" selected
                                    option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-02.jpg"
                                    option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-03.jpg"
                                    option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                                <amp-img src="images/portfolio/proyecto-6--fronton/fronton-04.jpg"
                                    option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            </amp-carousel>
                        </amp-selector>
                        
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
                <amp-carousel layout="fixed-height" height="78" class="thumbnail-carousel">
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