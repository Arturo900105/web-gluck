<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="es">
<head>
    <?php $this->load->view('header/head-meta'); ?>
</head>
<body>

<!-- TODO COMIENZA MENÚ PARA ESCRITORIO -->
<?php $this->load->view('header/menu/menu-desktop'); ?>
<!-- TODO TERMINA MENÚ PARA ESCRITORIO -->

<!-- TODO COMIENZA MENÚ PARA MÓVILES -->
<?php $this->load->view('header/menu/menu-mobile'); ?>
<!-- TODO TERMINA MENÚ PARA MÓVILES -->

<!-- TODO COMIENZA CONTENIDO -->
<?php $this->load->view($content); ?>
<!-- TODO TERMINA CONTENIDO -->

<!-- TODO COMIENZA SCRIPTS -->
<?php $this->load->view('footer/scripts'); ?>
<!-- TODO TERMINA SCRIPTS -->

</body>
</html>