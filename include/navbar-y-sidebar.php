<?php
    // URL actual
    $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

    // Nombre del archivo de la página actual (Último slug de la URL actual) (Ejemplos: index.php, contacto.php)
    $nombre_del_archivo_de_la_pagina_actual = basename($url);

    // Breadcrumbs (#barra-superior--breadcrumbs)
    $breadcrumbs = "";
    switch ($nombre_del_archivo_de_la_pagina_actual) {

        case 'cumonor.es':
        case 'index.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span id="pagina-actual">Inicio</span>';
        break;
        
        case 'estructuras-metalicas.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span>Naves industriales</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Estructuras metálicas</span>';
            break;
        
        case 'cubiertas.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span>Naves industriales</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Cubiertas</span>';
            break;
        
        case 'reformas.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span>Naves industriales</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Reformas</span>';
            break;
        
        case 'reparaciones.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span>Naves industriales</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Reparaciones</span>';
            break;
        
        case 'limpieza-y-mantenimiento-de-naves-industriales.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span>Naves industriales</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Limpieza y Mantenimiento</span>';
            break;
        
        case 'naves-agricolas.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Naves Agrícolas</span>';
            break;
        
        case 'limpieza-y-mantenimiento-de-viviendas.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span>Viviendas</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Limpieza y Mantenimiento</span>';
            break;
        
        
        case 'taller-de-reparacion-de-maquinaria-agricola.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span>Servicios</span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Taller de reparación de maquinaria agrícola</span>';
            break;

        case 'proyectos-realizados.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span id="pagina-actual">Proyectos realizados</span>';
            break;

        case 'proyecto-ikea-valladolid.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span><a href="proyectos-realizados.php">Proyectos realizados</a></span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">IKEA (Valladolid)</span>';
            break;

        case 'proyecto-centro-logistico-coca-cola-badajoz.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span><a href="proyectos-realizados.php">Proyectos realizados</a></span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Centro logístico Coca-Cola (Badajoz)</span>';
            break;

        case 'proyecto-pascual-ubicacion.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span><a href="proyectos-realizados.php">Proyectos realizados</a></span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Pascual (¿Ubicación?)</span>';
            break;

        case 'proyecto-grupo-siro-medina-del-campo-valladolid.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span><a href="proyectos-realizados.php">Proyectos realizados</a></span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Grupo SIRO (Medina del Campo, Valladolid)</span>';
            break;

        case 'proyecto-galletas-gullon-ubicacion.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span><a href="proyectos-realizados.php">Proyectos realizados</a></span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Galletas Gullón (¿Ubicación?)</span>';
            break;

        case 'proyecto-pista-de-fronton-aleamayor-valladolid.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span><a href="proyectos-realizados.php">Proyectos realizados</a></span>
                            <i class="fas fa-chevron-right"></i>
                            <span id="pagina-actual">Pista de Frontón (Aleamayor, Valladolid)</span>';
            break;

        case 'contacto.php':
            $breadcrumbs = '<i class="fas fa-chevron-circle-right"></i>
                            <span id="estas-aqui">Estás aquí: </span>
                            <span id="pagina-actual">Contacto</span>';
            break;
        
        default:
            $breadcrumbs = "";
            break;
    }
?>


<div id="barra-superior--breadcrumbs-telefono-emails-ubicacion" class="container">

    <div id="barra-superior--breadcrumbs"><?= ( ( isset($breadcrumbs) ) ? $breadcrumbs : '' ); ?></div>

    <div id="barra-superior--telefono-emails-ubicacion">
        <div class="barra-superior--contacto">
            <div title="Llamar a Francisco Borge González">
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+34 646 487 829">646 487 829</a>
            </div>

            <div title="Llamar a Fernando Ibáñez González">
                <i class="fa fa-phone-alt"></i>
                <a href="tel:+34 606 741 852">606 741 852</a>
            </div>

        </div>
        
        <div class="barra-superior--contacto">
            <div>
                <i class="fa fa-envelope"></i>
                <a href="mailto:contacto&#64;cumonor.es">contacto&#64;cumonor.es</a>
            </div>
        </div>

        <div class="barra-superior--contacto">
            <a href="https://www.google.es/maps/place/Cumonor+Cubiertas+y+Montajes+Norte+S.L./@41.9619475,-4.338571,674m/data=!3m2!1e3!4b1!4m5!3m4!1s0xd465358037dac73:0xabf85e2a37702e0c!8m2!3d41.9619475!4d-4.3363823" target="_blank" rel="noopener" title="Carretera Nacional 620, P.K. 76'4, Magaz de Pisuerga, Palencia">
                <span class="una-linea"><i class="fas fa-map-marker-alt" style='margin-top: 3px;'></i>Ver en Google Maps</span>
            </a>
        </div>
    </div>
                    
</div>


<nav class="navbar navbar-expand-lg navbar-light navbar-sticky">

  <div class="container">

      <a class="navbar-brand" href="index.php" style="line-height: 0;">
        <!-- Hero image (preloaded) -->
        <!-- Nota: debe tener el mismo enlace que <link rel="preload" href="images/logo/cumonor-cubiertas-y-montajes-norte-s.l.-logo-con-texto-en-una-linea.png" as="image"> -->
        <amp-img src="images/logo/cumonor-cubiertas-y-montajes-norte-s.l.-logo.png"
            width="225" 
            height="101"
            layout="intrinsic" 
            alt="Cumonor - Cubiertas y Montajes Norte s.l. Logo"
            style="max-width: 170px;">
        </amp-img>
      </a>

      <button class="navbar-toggler" type="button" on="tap:sidebar1.toggle">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">

            <!-- CUIDADO: los cambios en el menú hay que hacerlos en aquí y en el menú móvil (#sidebar1). -->

            <li class="nav-item">
                <a class="nav-link <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "cumonor.es" || $nombre_del_archivo_de_la_pagina_actual == "index.php" ) ? 'active' : '' ); ?>" href="index.php">Inicio</a>
            </li>

            <li id="nav-item--naves-industriales" class="nav-item dropdown">

                <a class="nav-link dropdown-toggle 
                    <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "estructuras-metalicas.php" || 
                            $nombre_del_archivo_de_la_pagina_actual == "cubiertas.php" || 
                            $nombre_del_archivo_de_la_pagina_actual == "reformas.php" || 
                            $nombre_del_archivo_de_la_pagina_actual == "reparaciones.php" || 
                            $nombre_del_archivo_de_la_pagina_actual == "limpieza-y-mantenimiento-de-naves-industriales.php" ) ? 'active' : '' );
                    ?>"
                >Naves industriales</a>
                
                <div id="nav-item--dropdown-menu--naves-industriales" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- <h6 class="dropdown-header">Naves Industriales</h6> -->
                    <a class="dropdown-item <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "estructuras-metalicas.php" ) ? 'active' : '' ); ?>" href="estructuras-metalicas.php">Estructuras Metálicas</a>
                    <a class="dropdown-item <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "cubiertas.php" ) ? 'active' : '' ); ?>" href="cubiertas.php">Cubiertas</a>
                    <a class="dropdown-item <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "reformas.php" ) ? 'active' : '' ); ?>" href="reformas.php">Reformas</a>
                    <a class="dropdown-item <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "reparaciones.php" ) ? 'active' : '' ); ?>" href="reparaciones.php">Reparaciones</a>
                    <a class="dropdown-item <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "limpieza-y-mantenimiento-de-naves-industriales.php" ) ? 'active' : '' ); ?>" href="limpieza-y-mantenimiento-de-naves-industriales.php">Limpieza y Mantenimiento</a>
                </div>

            </li>

            
            <li class="nav-item">
                <a class="nav-link <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "naves-agricolas.php" ) ? 'active' : '' ); ?>" href="naves-agricolas.php">Naves Agrícolas</a>
            </li>

            <li id="nav-item--naves-industriales" class="nav-item dropdown">
                
                <a class="nav-link dropdown-toggle <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "limpieza-y-mantenimiento-de-viviendas.php" ) ? 'active' : '' ); ?>">Viviendas</a>
                
                <div id="nav-item--dropdown-menu--naves-industriales" class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "limpieza-y-mantenimiento-de-viviendas.php" ) ? 'active' : '' ); ?>" href="limpieza-y-mantenimiento-de-viviendas.php">Limpieza y Mantenimiento</a>
                </div>

            </li>

            <li class="nav-item">
                <a class="nav-link <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "taller-de-reparacion-de-maquinaria-agricola.php" ) ? 'active' : '' ); ?>" href="taller-de-reparacion-de-maquinaria-agricola.php" title="Taller de reparación de maquinaria agrícola">Taller</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "proyectos-realizados.php" ) ? 'active' : '' ); ?>" href="proyectos-realizados.php">Proyectos</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?= ( ( $nombre_del_archivo_de_la_pagina_actual == "contacto.php" ) ? 'active' : '' ); ?>" href="contacto.php">Contacto</a>
            </li>

        </ul>
    </div>
      
  </div>
</nav>




<amp-sidebar id="sidebar1" layout="nodisplay" side="right" class="inner-nav movil-nav">
    
    <div id="sidebar1-navbar-toggler-container">
        <div>
            <button class="navbar-toggler" type="button" on="tap:sidebar1.toggle">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>

    <div>
        <ul class="clearlist">

            <!-- CUIDADO: los cambios en el menú hay que hacerlos en aquí y en el menú de desktop (.navbar-nav). -->

            <li><a href="index.php">Inicio</a></li>

            <li class="nav-dropdown">
                <amp-accordion layout="container" animate disable-session-states class="dropdown">
                    <section>
                        <header>Naves Industriales</header>
                        <ul class="dropdown-items">
                            <li class="dropdown-item">
                                <a href="estructuras-metalicas.php">Estructuras Metálicas</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="cubiertas.php">Cubiertas</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="reformas.php">Reformas</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="reparaciones.php">Reparaciones</a>
                            </li>
                            <li class="dropdown-item">
                                <a href="limpieza-y-mantenimiento-de-naves-industriales.php">Limpieza y Mantenimiento</a>
                            </li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>

            <li><a href="naves-agricolas.php">Naves Agrícolas</a></li>

            <li class="nav-dropdown">
                <amp-accordion layout="container" animate disable-session-states class="dropdown">
                    <section>
                        <header>Viviendas</header>
                        <ul class="dropdown-items">
                            <li class="dropdown-item">
                                <a href="limpieza-y-mantenimiento-de-viviendas.php">Limpieza y Mantenimiento</a>
                            </li>
                        </ul>
                    </section>
                </amp-accordion>
            </li>

            <li><a href="taller-de-reparacion-de-maquinaria-agricola.php">Taller</a></li>

            <li><a href="proyectos-realizados.php">Proyectos</a></li>

            <li><a href="contacto.php">Contacto</a></li>

        </ul>
    </div>
    
</amp-sidebar>
