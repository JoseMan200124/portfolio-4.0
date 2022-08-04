<?php
class controladorPortafolio{
    public function plantilla(){
        include "vistas/plantilla.php"; 
    }
    static public function mostrarProyectos($item, $valor){
        $tabla = "proyectos"; 
        $respuesta = modeloPortafolio::modeloPortafolioDatos($tabla, $item, $valor); 
        return $respuesta; 
    }
    static public function mostrarTrabajos($item, $valor){
        $tabla = "linea"; 
        $respuesta =modeloPortafolio::modeloPortafolioDatos($tabla, $item, $valor); 
        return $respuesta; 
    }
    
}