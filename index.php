<?php
require_once "controladores/portafolio.controlador.php";
require_once "modelos/portafolio.modelo.php"; 
require_once "modelos/rutas.php";
$plantilla = new controladorPortafolio(); 
$plantilla -> plantilla(); 