<?php
const LIST_SERVICES = array(
    'Recursos Humanos',
    'Administración y Dirección de Empresas',
    'Jurídico Laboral'
);

$TIPO_SERVICE = LIST_SERVICES[$service_numer-1];

$container = '<div class="col-xl-4 col-lg-5">
                    <div class="service-details__sidebar">
                        <div class="service-details__sidebar-service">
                            <ul class="service-details__sidebar-service-list list-unstyled">';

for ($i = 0; $i < count(LIST_SERVICES); $i++){
    $class = ($service_numer-1) ==  $i ? ' class="current" ':'';
    $container .= ' <li '.$class.'><a href="./service.php?service='.md5($i+1).'#servicio">'.LIST_SERVICES[$i].' <span class="icon-right-arrow"></span></a></li>';
}
$container .= '
                            </ul>
                        </div>';
$container .= getBanner();
$container .= '
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">';
$container .= getInfo($service_numer) ;
$container .= '
                </div>';

$titulo = '<h2>'.$TIPO_SERVICE.'</h2>
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="./">Inicio</a></li>
                <li><a href="services.php">Servicios</a></li>
                <li class="active">'.$TIPO_SERVICE.'</li>
            </ul>';

function getBanner(){
    $banner = '
        <div class="service-details__need-help">
            <div class="service-details__need-help-bg" style="background-image: url(assets/images/backgrounds/service-details-need-help-bg.jpg)">
            </div>
            <h2 class="service-details__need-help-title">Contacta a nuestros abogados corporativos</h2>
            <div class="service-details__need-help-icon">
                <span class="icon-phone"></span>
            </div>
            <div class="service-details__need-help-contact">
                <p>Llámenos</p>
                <a href="tel:2383905342">238 390 53 42</a>
            </div>
        </div> ';
    return $banner;
}

function getInfo($id_service) {
    $tipo_service = LIST_SERVICES[$id_service-1];
    switch ($id_service){
        case 1:
            ob_start();
            include( dirname ( __FILE__ ) . '/1.php' );
            return ob_get_clean();
            break;
        case 2:
            ob_start();
            include( dirname ( __FILE__ ) . '/2.php' );
            return ob_get_clean();
            break;
        case 3:
            ob_start();
            include( dirname ( __FILE__ ) . '/3.php' );
            return ob_get_clean();
            break;
    }
}