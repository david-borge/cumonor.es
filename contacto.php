<?php include 'include/html-and-head-tags-start.php';?>


    <!-- Título de esta página -->
    <title>Contacto - Cumonor</title>

    <!-- Description de esta página -->
    <meta name="description" content="FALTA">

    <!-- URL canónica de esta página -->
    <link rel="canonical" href="https://cumonor.es/contacto.php">


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
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
    
    
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

        /* Información de contacto */
        .info-contacto {
            max-width: 100%;

            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-pack: distribute;
                justify-content: space-around;
            -ms-flex-wrap: wrap;
                flex-wrap: wrap;

            text-align: center;
            color: #3c2a98;
        }

        .info-contacto > div {
            margin-right: 10px;
            margin-left: 10px;
        }

        .info-contacto div:not(.nombre) {
            white-space: nowrap;
            margin-bottom: 30px;
        }

        .info-contacto .nombre {
            margin-right: 10px;
            margin-bottom: 10px;
            font-weight: bold;
            white-space: nowrap;
        }

        .info-contacto a {
            color: #3c2a98;
            text-decoration: none;
            text-align: center;
        }

        .info-contacto a:hover {
            color: #3c2a98;
            text-decoration: underline;
        }

        .info-contacto .fa, .info-contacto .fas, .info-contacto .far, .info-contacto .fal, .info-contacto .fa {
            color: #3c2a98;
            margin-right: 6px;
        }
        /* Fin de: Información de contacto */

        /* Footer */
        footer {
            margin-top: -6px;
        }

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


    <main class="pt-5" role="main">

        <div id="welcome-blurb">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <h1>Contacto</h1>

                        <p class="text-center">Solicita información o presupuesto sin compromiso</p>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="col-md-6">

                    <h2>Información de contacto</h2>

                    <div class="h2-separador">
                        <div class="h2-separador-inner"></div>
                    </div>
                    
                    <div class="info-contacto">
                        <div>
                            <div class="nombre">Francisco Borge González</div>
                            <i class="fa fa-phone-alt"></i>
                            <a href="tel:+34 646 487 829">646 487 829</a>
                        </div>
                    </div>

                    <div class="info-contacto">
                        <div>
                            <div class="nombre">Fernando Ibáñez González</div>
                            <i class="fa fa-phone-alt"></i>
                            <a href="tel:+34 606 741 852">606 741 852</a>
                        </div>

                    </div>

                    <div class="info-contacto">
                        <div>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:contacto&#64;cumonor.es">contacto&#64;cumonor.es</a>
                        </div>
                    </div>

                    <div class="info-contacto">
                        <a href="https://www.google.es/maps/place/Cumonor+Cubiertas+y+Montajes+Norte+S.L./@41.9619475,-4.338571,674m/data=!3m2!1e3!4b1!4m5!3m4!1s0xd465358037dac73:0xabf85e2a37702e0c!8m2!3d41.9619475!4d-4.3363823" target="_blank" rel="noopener">
                            <span class="una-linea"><i class="fas fa-map-marker-alt" style='margin-top: 3px;'></i>Ver en Google Maps:</span><br/>
                            <span class="una-linea">Carretera Nacional 620, P.K. 76'4, </span>
                            <span class="una-linea">Magaz de Pisuerga, Palencia</span>
                        </a>
                    </div>

                </div>
                <div class="col-md-6">

                    <h2>Envíanos un mensaje</h2>

                    <div class="h2-separador">
                        <div class="h2-separador-inner"></div>
                    </div>

                    <form id="formulario" action="enviar-formulario-contacto.php" target="_top">
                        <div class="form-group">
                            <label for="nombre_y_apellidos">Nombre y apellidos</label>
                            <input id="nombre_y_apellidos" name="nombre_y_apellidos" type="text" class="form-control" aria-describedby="nombreHelp" required="required">
                        </div>
                        <div class="form-group">
                            <label for="correo_electronico">Correo electrónico</label>
                            <input id="correo_electronico" name="correo_electronico" type="email" class="form-control" aria-describedby="emailHelp" required="required">
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono (Opcional)</label>
                            <input id="telefono" name="telefono" type="tel" class="form-control" aria-describedby="telHelp">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje (Opcional)</label>
                            <textarea id="mensaje" name="mensaje" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar mensaje</button>
                    </form>

                </div>
            </div>

        </div>

        <div class="row" style="padding-top: 50px;">
            <div class="col-12">
                <!-- <iframe src="" style="border:0; width: 100%; min-height: 400px;" allowfullscreen="" loading="lazy"></iframe> -->
                    <amp-iframe
                        width="4"
                        height="1.5"
                        sandbox="allow-scripts allow-same-origin"
                        layout="responsive"
                        frameborder="0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2904.463382508686!2d-4.338547562746996!3d41.961947479658015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd465358037dac73%3A0xabf85e2a37702e0c!2sCumonor%20Cubiertas%20y%20Montajes%20Norte%20S.L.!5e1!3m2!1ses!2ses!4v1617206881941!5m2!1ses!2ses">
                    </amp-iframe>
            </div>
        </div>

    </main>


    <?php include 'include/footer-tag.php';?>


</body>

</html>