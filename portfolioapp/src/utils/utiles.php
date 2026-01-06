<?php 
// UD.3.2.f Funcion para ordenar proyectos por título
function ordenaProyectosAsc($proyectos)
{
    usort($proyectos, function($a,$b){
        return strtoupper($a['titulo'])<=>strtoupper($b['titulo']);
    });
    return $proyectos;
}

function ordenaProyectosDsc($proyectos)
{
    usort($proyectos, function($a,$b){
        return strtoupper($b['titulo'])<=>strtoupper($a['titulo']);
    });
    return $proyectos;
}

function fechaAno(){
    $anio = date("Y");
    return $anio;
};