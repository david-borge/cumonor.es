<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>Taller de reparación de maquinaria agrícola - Cumonor</title>

    <!-- Description de esta página -->
    <meta name="description" content="FALTA">

    <!-- URL canónica de esta página -->
    <link rel="canonical" href="https://cumonor.es/">


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

                        <h1>Taller de reparación de maquinaria agrícola</h1>

                        <p class="text-center">Subtítulo con <span class="destacar">texto destacado</span>.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <h2>Lorem ipsum dolor sit amet consectetur.</h2>

                    <p>Ea tempor consequat non in est quis duis ea laboris culpa ipsum minim aute. Labore voluptate Lorem incididunt nulla anim ullamco. Aute ut ex occaecat sunt veniam aliquip laborum esse consequat elit cillum.</p>
                    <p>Exercitation magna nostrud velit consequat irure anim. Nulla ipsum eiusmod aute est. Nisi non ullamco aliqua ea ea consequat sint eu consectetur anim. Ex Lorem et ad eu et eiusmod laboris. Aute fugiat occaecat consequat occaecat nulla ea pariatur id. In exercitation aliqua enim amet Lorem amet cillum non.</p>

                </div>
                <div class="col-md-3">

                    <div id="precio-card" class="card mb-4 shadow-sm">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal">Precio</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title pricing-card-title">15 €</h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>Característica 1</li>
                                <li>Característica 2</li>
                                <li>Característica 3</li>
                                <li>Característica 4</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-primary">Contactar</button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
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
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-01.jpg"
                                width="1600" height="1200" layout="intrinsic"></amp-img>
                        </div>
                        <div class="slide">
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-02.jpg"
                                width="1600" height="1200" layout="intrinsic"></amp-img>
                        </div>
                        <div class="slide">
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-03.jpg"
                                width="1600" height="1200" layout="intrinsic"></amp-img>
                        </div>
                        <div class="slide">
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-04.jpg"
                                width="1600" height="1200" layout="intrinsic"></amp-img>
                        </div>
                        <div class="slide">
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-05.jpg"
                                width="1600" height="1200" layout="intrinsic"></amp-img>
                        </div>
                    </amp-carousel>

                    <amp-selector id="ampSelector" [selected]="carousel1.selectedSlide"
                        on="select:AMP.setState({carousel1: {selectedSlide:event.targetOption}})">
                        <amp-carousel layout="intrinsic" width="1600" height="72" class="thumbnail-carousel">
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-01.jpg" selected
                                option="0" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-02.jpg"
                                option="1" role="button" tabindex="1"  width="96" height="72" layout="fixed"></amp-img>
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-03.jpg"
                                option="2" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-04.jpg"
                                option="3" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                            <amp-img src="images/proyectos-realizados/ikea-valladolid/ikea-valladolid-05.jpg"
                                option="4" role="button" tabindex="1" width="96" height="72" layout="fixed"></amp-img>
                        </amp-carousel>
                    </amp-selector>

                </div>
            </div>
        </div>
        
    </main>


    <?php include 'include/footer-tag.php';?>


</body>

</html>