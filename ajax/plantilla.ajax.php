<?php

require_once "../controladores/portafolio.controlador.php"; 
require_once "../modelos/portafolio.modelo.php"; 

class ajaxPortafolio{
    public function ajaxEstiloPortafolio(){
        $respuesta = controladorPortafolio::plantilla(); 
        echo json_decode($respuesta); 
    }
}

$objeto = new ajaxPortafolio(); 
$objeto -> ajaxEstiloPortafolio(); 