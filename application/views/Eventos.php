<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gluck - Nosotros</title>
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/gluck.css'); ?>">
</head>
<body>
<!-- TODO COMIENZA MENÚ PARA ESCRITORIO -->
<div class="container-fluid text-center d-none d-md-block">
    <div class="container">
        <div id="original-nav" class="row align-items-center pt-2 pb-0 mb-0">
            <div class="col-md-5 bg-green-gluck logo-gluck">
                <a href="<?php echo base_url(); ?>">
                    <img src="<?php echo base_url('assets/img/Iconos-01.svg'); ?>" alt="Gluck">
                </a>
            </div>
            <div class="row col-md-7 ml-1">
                <a href="<?php echo base_url('nosotros'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Nosotros</strong>
                    <div class="x-small">Conócenos un poco</div>
                </a>
                <a href="<?php echo base_url('contacto'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Contacto</strong>
                    <div class="x-small">Pregunta por nosotros</div>
                </a>
                <a href="<?php echo base_url('eventos'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla b-activo">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Eventos</strong>
                    <div class="x-small">Organizamos tus eventos</div>
                </a>
                <a href="<?php echo base_url('banquetes'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Banquetes</strong>
                    <div class="x-small">Todo para tus banquetes</div>
                </a>
                <a href="<?php echo base_url('congresos'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Congresos</strong>
                    <div class="x-small">Organizamos congresos</div>
                </a>
                <a href="<?php echo base_url('sociales'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla">
                    <strong class="font-assassin h4 m-0 font-weight-bold">Sociales</strong>
                    <div class="x-small">sociales</div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- TODO TERMINA MENÚ PARA ESCRITORIO -->

<!-- TODO COMIENZA MENÚ PARA MÓVILES -->
<div class="container-fluid bg-green-gluck fixed-top d-md-none">
    <div class="row align-items-center no-gutters">
        <div class="col text-left text-uppercase text-white">Gluck</div>
        <div class="col-auto ml-auto text-right">
            <i class="fa fa-bars rounded pl-2 pr-2 m-2" data-toggle="collapse" data-parent="#accordion"
               href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></i>
        </div>
    </div>
    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
        <div href="<?php echo base_url('nosotros'); ?>" class="pt-1 pb-1 ancla">Nosotros</div>
        <div href="<?php echo base_url('contacto'); ?>" class="pt-1 pb-1 ancla">Contacto</div>
        <div href="<?php echo base_url('eventos'); ?>" class="pt-1 pb-1 ancla b-activo">Eventos</div>
        <div href="<?php echo base_url('banquetes'); ?>" class="pt-1 pb-1 ancla">Banquetes</div>
        <div href="<?php echo base_url('congresos'); ?>" class="pt-1 pb-1 ancla">Congresos</div>
        <div href="<?php echo base_url('sociales'); ?>" class="pt-1 pb-1 ancla">Sociales</div>
    </div>
</div>
<!-- TODO TERMINA MENÚ PARA MÓVILES -->

<div class="container pt-5 pt-md-3 h-header box-shadow-down mt-2">
    <div class="row no-gutters w-100 h-100">
        <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php if ($handle = opendir('assets/img/galeria/' . $imgSet)) {
                    $indice = 0;
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            ?>
                            <?php if ($indice == 0) { ?>
                                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                            <?php } else { ?>
                                <li data-target="#carouselExampleControls" data-slide-to="<?php echo $indice; ?>"></li>
                            <?php } ?>
                            <?php $indice++;
                        }
                    }
                    closedir($handle);
                } ?>
            </ol>
            <div class="carousel-inner h-100 align-items-center">
                <?php if ($handle = opendir('assets/img/galeria/' . $imgSet)) {
                    $indice2 = 0;
                    while (false !== ($entry = readdir($handle))) {
                        if ($entry != "." && $entry != "..") {
                            ?>
                            <?php if ($indice2 == 0) { ?>
                                <div class="carousel-item active h-100">
                                    <img class="d-block w-100 h-100 img-carousel"
                                         style="background-image: url('<?php echo base_url('assets/img/galeria/' . $imgSet . '/' . $entry); ?>');">
                                </div>
                            <?php } else { ?>
                                <div class="carousel-item h-100">
                                    <img class="d-block w-100 h-100 img-carousel"
                                         style="background-image: url('<?php echo base_url('assets/img/galeria/' . $imgSet . '/' . $entry); ?>');">
                                </div>
                            <?php } ?>
                            <?php $indice2++;
                        }
                    }
                    closedir($handle);
                } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="shadow"></div>
        </div>
    </div>
</div>

<div class="container pt-3 pb-3 pl-0 pr-0">
    <div class="row justify-content-center pt-4">
        <div class="col-md-3">
            <div class="p-3 p-relative text-center bg-purple-gluck">
                <a href="<?php echo base_url('eventos'); ?>"
                   class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white">
                    <img class="icon-circle" src="<?php echo base_url('assets/img/Iconos-02.svg'); ?>">
                </a>
            </div>
            <div class="service-title mt-3">
                <h6 class="text-uppercase text-center font-climousinesb h5">Eventos</h6>
                <p class="text-center description mt-3">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 p-relative text-center bg-green-gluck">
                <a href="<?php echo base_url('banquetes'); ?>"
                   class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white">
                    <img class="icon-circle" src="<?php echo base_url('assets/img/Iconos-05.svg'); ?>">
                </a>
            </div>
            <div class="service-title mt-3">
                <h6 class="text-uppercase text-center font-climousinesb h5">Banquetes</h6>
                <p class="text-center description mt-3">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 p-relative text-center bg-orange-gluck">
                <a href="<?php echo base_url('congresos'); ?>"
                   class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white">
                    <img class="icon-circle" src="<?php echo base_url('assets/img/Iconos-04.svg'); ?>">
                </a>
            </div>
            <div class="service-title mt-3">
                <h6 class="text-uppercase text-center font-climousinesb h5">Congresos</h6>
                <p class="text-center description mt-3">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 p-relative text-center bg-gray-gluck">
                <a href="<?php echo base_url('sociales'); ?>"
                   class="ml-auto mr-auto d-flex align-items-center justify-content-center text-white">
                    <img class="icon-circle" src="<?php echo base_url('assets/img/Iconos-03.svg'); ?>">
                </a>
            </div>
            <div class="service-title mt-3">
                <h6 class="text-uppercase text-center font-climousinesb h5">Sociales</h6>
                <p class="text-center description mt-3">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container pt-3 pb-2 bg-green-gluck text-center">
    <a href="">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 500 500" style="height:70px;width:70px;enable-background:new 0 0 500 500;"
             xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #FFFFFF;
    }

    .st1 {
        fill: #ABBEE2;
    }

    .st2 {
        fill: #FFFFFF;
    }

    .st3 {
        fill: #EFAE3A;
    }

    .st4 {
        fill: #777586;
    }
</style>
            <g>
                <path class="st2" d="M249.9,58.4c-107.4,0-195,87.1-195,194.8c0,106.7,87.6,194.4,195,194.4c108,0,195.3-87.7,195.3-194.4
		C445.1,145.5,357.8,58.4,249.9,58.4z M249.9,422.6c-93.8,0-169.9-76.4-169.9-169.3C79.9,159,156,83,249.9,83
		c94.1,0,170.3,76,170.3,170.3C420.2,346.2,343.9,422.6,249.9,422.6z"/>
                <path class="st2" d="M237.1,324c0-0.3,0-0.7,0-1c0-22.9,0-45.8,0-68.7c0-1-0.3-1.3-1.3-1.3c-5.1,0.1-10.2,0-15.3,0
		c-0.9,0-1.2-0.1-1.2-1.1c0-7.4,0-14.7,0-22.1c0-1,0.3-1.2,1.3-1.2c5.1,0,10.2,0,15.3,0c0.9,0,1.2-0.3,1.2-1.2
		c0-6.6-0.2-13.1,0.2-19.7c0.3-4.3,1-8.6,2.8-12.5c2.3-5.3,6.2-9,11.7-10.9c4.6-1.6,9.4-2.1,14.3-2.2c6.1,0,12.2,0,18.4,0
		c0.8,0,1.1,0.1,1.1,1c0,7.4,0,14.9,0,22.3c0,0.9-0.3,1.1-1.2,1.1c-4.4,0-8.8-0.1-13.1,0.1c-1.2,0.1-2.3,0.3-3.4,0.6
		c-2.5,0.8-3.7,2.6-3.9,5.1c-0.1,1.2-0.2,2.5-0.2,3.7c0,3.8,0,7.6-0.1,11.4c0,0.9,0.2,1.1,1.1,1.1c5.8,0,11.6,0,17.4,0
		c1.1,0,2.6-0.5,3.2,0.2c0.6,0.7-0.1,2.1-0.2,3.2c-0.7,6.7-1.4,13.4-2.1,20c-0.1,0.8-0.3,1-1.1,1c-5.7,0-11.5,0-17.2,0
		c-0.9,0-1.2,0.2-1.2,1.2c0,22.8,0,45.6,0,68.4c0,0.5,0,0.9,0,1.4C254.8,324,245.9,324,237.1,324z"/>
            </g>
</svg>
    </a>
    <a href="">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 500 500" style="height:70px;width:70px;enable-background:new 0 0 500 500;"
             xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #FFFFFF;
    }

    .st1 {
        fill: #ABBEE2;
    }

    .st2 {
        fill: #FFFFF;
    }

    .st3 {
        fill: #EFAE3A;
    }

    .st4 {
        fill: #777586;
    }
</style>
            <g>
                <path class="st2" d="M242.9,61.3C137,61.3,51.5,146.6,51.5,252.8c0,105.3,85.4,190.6,191.3,190.6c105.9,0,191.6-85.3,191.6-190.6
		C434.5,146.6,348.7,61.3,242.9,61.3z M242.9,418.9c-92.3,0-167.1-74.5-167.1-166.1c0-92.2,74.8-167.4,167.1-167.4
		c92.5,0,167.7,75.2,167.7,167.4C410.5,344.4,335.3,418.9,242.9,418.9z"/>
                <g>
                    <path class="st2" d="M245.4,301c-24.4,0.1-43.9-19.3-44-43.7c0-24.4,19.3-43.9,43.7-44c24.4-0.1,43.9,19.3,44,43.7
			C289.2,281.5,269.8,301,245.4,301z M273.6,257.3c0-15.9-12.5-28.4-28.4-28.4s-28.3,12.5-28.3,28.5c0,15.7,12.5,28.1,28.1,28.2
			C261,285.6,273.6,273.1,273.6,257.3z"/>
                    <path class="st2" d="M301.1,211.7c-0.1,5.7-4.8,10.3-10.4,10.2c-5.6-0.1-10.3-5-10.2-10.5c0.1-5.6,4.8-10.1,10.5-10.1
			C296.9,201.5,301.2,205.9,301.1,211.7z"/>
                    <g>
                        <path class="st2" d="M283.5,340h-76.3c-25.1,0-45.5-20.4-45.5-45.5v-76.3c0-25.1,20.4-45.5,45.5-45.5h76.3
				c25.1,0,45.5,20.4,45.5,45.5v76.3C329,319.6,308.6,340,283.5,340z M207.2,184.6c-18.5,0-33.6,15.1-33.6,33.6v76.3
				c0,18.5,15.1,33.6,33.6,33.6h76.3c18.5,0,33.6-15.1,33.6-33.6v-76.3c0-18.5-15.1-33.6-33.6-33.6H207.2z"/>
                    </g>
                </g>
            </g>
</svg>
    </a>
    <a href="">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 500 500" style="height:70px;width:70px;enable-background:new 0 0 500 500;"
             xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #FFFFFF;
    }

    .st1 {
        fill: #ABBEE2;
    }

    .st2 {
        fill: #FFFFFF;
    }

    .st3 {
        fill: #EFAE3A;
    }

    .st4 {
        fill: #777586;
    }
</style>
            <g>
                <g>
                    <g>
                        <path class="st2" d="M309.6,253.4c0-15.7-12.2-28-27.3-28c-15.3,0-27.3,12.3-27.3,28c0,14.2,12,27.3,27.3,27.3
				C297.4,280.7,309.6,267.5,309.6,253.4z"/>
                        <path class="st2" d="M333.4,194.7h-5.7l-4.3-9.4c-1.4-2.5-3.9-4.6-6.9-4.6h-54c-2.8,0-5,2.1-5.6,4.6l-4.8,9.4h-85.4
				c-3.5,0-6.2,1.9-6.2,6.3v104.5c0,3.5,2.7,6.3,6.2,6.3h166.8c3.5,0,6.3-2.8,6.3-6.3V201C339.7,196.6,336.9,194.7,333.4,194.7z
				 M238.4,209.5c0,1.1-0.6,1.4-1.7,1.4h-12.5c-0.7,0-2.5-0.3-2.5-1.4v-2.8c0-1.5,1.8-2.4,2.5-2.4h12.5c1.1,0,1.7,0.8,1.7,2.4V209.5
				z M282.3,294.8c-23.8,0-42.3-18.7-42.3-41.4c0-23.8,18.5-42.7,42.3-42.7c23.7,0,42.2,18.9,42.2,42.7
				C324.4,276.1,305.9,294.8,282.3,294.8z"/>
                    </g>
                </g>
                <path class="st2" d="M249.8,51.3c-107.6,0-195.1,87-195.1,194.5c0,107.9,87.5,195.5,195.1,195.5c108.1,0,195.5-87.6,195.5-195.5
		C445.3,138.3,357.9,51.3,249.8,51.3z M249.8,416.4c-94,0-169.9-76.3-169.9-170.6c0-93.4,75.9-169.6,169.9-169.6
		c94.3,0,170.6,76.2,170.6,169.6C420.4,340.1,344.1,416.4,249.8,416.4z"/>
            </g>
</svg>
    </a>
</div>

<script type="application/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/gluck.js'); ?>"></script>
</body>
</html>