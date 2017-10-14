<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gluck</title>
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
                <a href="<?php echo base_url('eventos'); ?>" class="col-md-4 pt-2 pb-2 m-button ancla">
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
        <div href="<?php echo base_url('contactos'); ?>" class="pt-1 pb-1 ancla">Contacto</div>
        <div href="<?php echo base_url('eventos'); ?>" class="pt-1 pb-1 ancla">Eventos</div>
        <div href="<?php echo base_url('banquetes'); ?>" class="pt-1 pb-1 ancla">Banquetes</div>
        <div href="<?php echo base_url('congresos'); ?>" class="pt-1 pb-1 ancla">Congresos</div>
        <div href="<?php echo base_url('sociales'); ?>" class="pt-1 pb-1 ancla">Sociales</div>
    </div>
</div>
<!-- TODO TERMINA MENÚ PARA MÓVILES -->

<div class="container p-0 h-header box-shadow">
    <img class="w-100 img-bg" src="<?php echo base_url('assets/img/home.jpg'); ?>" alt="Gluck">
    <div class="w-100 bg-green-gluck-alpha min-height-500">
        <div class="row h-100 align-items-center justify-content-cente">
            <div class="col-md-6 d-none d-md-block">
                <div class="row no-gutters">
                    <div class="col-auto bt-white pr-4">
                        <div class="row no-gutters text-white align-items-center justify-content-center">
                            <div class="social-link text-center pl-5 mr-3">Facebook</div>
                            <div class="col-auto pt-2 pb-2">
                                <i class="fa fa-facebook-f social-circle d-flex align-items-center justify-content-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-auto bt-white bb-white pr-4">
                        <div class="row no-gutters text-white align-items-center justify-content-center">
                            <div class="social-link text-center pl-5 mr-3">Instagram</div>
                            <div class="col-auto pt-2 pb-2">
                                <i class="fa fa-instagram social-circle d-flex align-items-center justify-content-center"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-right text-white item-bottom">
                <h1 class="col-12"><strong>Company Slogan</strong></h1>
                <h6 class="col-12">Lorem ipsum solor sit</h6>
                <p class="col-sm-9 col-md-9 col-lg-6 ml-auto text-justify f-10">
                    Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                    Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                    cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                    galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                </p>
                <button class="btn bg-green-gluck mr-3 text-white">Conocer más...</button>
            </div>
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

<div class="container pt-3 pb-3">
    <div class="row justify-content-center pt-4">
        <div class="col-md-6 bg-green-gluck text-center font-climousinesb pt-3 pb-3 pl-5 pr-5">
            <h4 class="text-uppercase text-white">Contamos también con...</h4>
            <img width="100" class="pt-1" src="<?php echo base_url('assets/img/Iconos-06.svg'); ?>">
            <p class="text-white text-justify">
                Para sus eventos conseguimos Chefs de Alto Nivel, Capitanes, Edecanes
                Prestigiados Músicos, Cómicos, Traductores, Profesionales en Iluminación
                y Sonido, Valet Parking, Seguridad, Reconocidos Decoradores y cualquier
                profesional para hacer de su evento el mejor.
            </p>
        </div>
        <div class="col-md-6 bg-white text-center font-climousinesb pt-3 pb-3 pl-5 pr-5">
            <h4 class="text-uppercase text-gray-gluck">Nuestra Experiencia...</h4>
            <img width="80" class="pt-2 pb-3" src="<?php echo base_url('assets/img/Iconos-07.svg'); ?>">
            <p class="text-gray-gluck text-justify">
                Contamos con clientes en la iniciativa privada tales como Afore Banamex,
                Banco de México, ADO, Inbursa, Herdez, Red Uno, Poineer, Purina, Hospital ABC,
                entre otros. También hemos trabajado con el Instituto Federal Electoral, ISSSTE,
                El Gobierno del Distrito Federal, La Secretaría de Desarrollo Social del Distrito
                Federal entre otros.
            </p>
        </div>
    </div>
</div>

<script type="application/javascript" src="<?php echo base_url('assets/js/jquery-3.2.1.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/tether.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="application/javascript" src="<?php echo base_url('assets/js/gluck.js'); ?>"></script>
</body>
</html>