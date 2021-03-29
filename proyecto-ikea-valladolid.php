<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>IKEA (Valladolid) - Proyectos realizados - Cumonor</title>

    <!-- Description de esta página -->
    <meta name="description" content="FALTA">

    <!-- URL canónica de esta página -->
    <link rel="canonical" href="https://cumonor.es/proyecto-ikea-valladolid.php">


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

        <div class="container">
            
            <!-- <p><a href="proyectos-realizados.php">Ir a todos los proyectos realizados</a></p> -->

            <div id="welcome-blurb">
                <div class="row">
                    <div class="col-12">

                        <h1>IKEA</h1>
                        <div class="ubicacion">Valladolid</div>
                        
                    </div>
                </div>
            </div>


            <div class="row justify-content-center mt-5">
                <div class="col-12 col-md-9">

                    <amp-state id="carousel">
                        <script type="application/json">
                            {
                                "selectedSlide": 0
                            }
                        </script>
                    </amp-state>

                    <amp-carousel on="slideChange:AMP.setState({carousel: {selectedSlide:event.index}})"
                        [slide]="carousel.selectedSlide" 
                        lightbox layout="responsive" width="1600" height="1200" type="slides" loop>

                        <?php
                            $ruta_imagenes_del_proyecto = 'images/proyectos-realizados/ikea-valladolid/';
							$files = scandir($ruta_imagenes_del_proyecto);
							$i = 0;
							foreach($files as $file) {
								if( $i >= 2 && endsWith($file, '.jpg') && !strpos($file, 'miniatura') ) {
									?>

                                        <div class="slide">
                                            <amp-img src="<?= $ruta_imagenes_del_proyecto.$file ?>" width="1600" height="1200" layout="responsive"></amp-img>
                                        </div>

									<?php
								}
								$i++;
							}

                            function endsWith( $haystack, $needle ) {
                                $length = strlen( $needle );
                                if( !$length ) {
                                    return true;
                                }
                                return substr( $haystack, -$length ) === $needle;
                            }
						?>
                        
                    </amp-carousel>

                    <amp-selector class="d-flex justify-content-center" [selected]="carousel.selectedSlide"
                        on="select:AMP.setState({carousel: {selectedSlide:event.targetOption}})">
                        <amp-carousel layout="fixed-height" height="78" class="thumbnail-carousel">

                            <?php
                                $i = 0;
                                $j = 0;
                                foreach($files as $file) {
                                    if( $i >= 2 && endsWith($file, '.jpg') && !strpos($file, 'miniatura') ) {
                                        ?>
    
                                            <div class="carrusel-punto" style="outline: none;" option="<?= $j ?>" <?= ($j == 0) ? 'selected' : '' ?> role="button" tabindex="1" width="8" height="8" layout="fixed"></div>
    
                                        <?php
                                        $j++;
                                    }
                                    $i++;
                                }
                            ?>

                        </amp-carousel>
                    </amp-selector>

                </div>
            </div>

        </div>
        
    </main>


    <?php include 'include/footer-tag.php';?>


</body>

</html>