<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>Reformas - Cumonor</title>

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
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
    <script async custom-element="amp-image-lightbox" src="https://cdn.ampproject.org/v0/amp-image-lightbox-0.1.js"></script>
    

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

                        <h1>Reformas</h1>

                        <p class="text-center">Subtítulo con <span class="destacar">texto destacado</span>.</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <h2>Hello World!</h2>

        </div>
        
    </main>


    <?php include 'include/footer-tag.php';?>


</body>

</html>