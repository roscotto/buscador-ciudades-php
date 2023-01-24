<?php
/* Tener una lista de ciudades con un clima y una ubicación específica */

function recomendacion(){
  //array asociativo. (En cada índice se compone por dos elementos "clave => valor") 
  //ciudades y clima
  $clima = array("Bogota" => "frio", "Monteria" => "calido", "Medellin" => "templado");
  //ciudad y ubicacion
  $ubicacion = array("Guajira" => "Norte", "Leticia" => "sur", "Santander" => "este", "Antioquia" => "oeste");
  //atractivo turístico
  $turismo = array("Santa Marta" => "mar", "Villavicencio" => "llanos", "Riohacha" => "desierto", "Quindio" => "valle");

  //herramienta para realizar búsqueda. Estructura de control. Sentencia switch.
  //voy a buscar por clima
  switch("turismo") {
    case "clima":
      echo array_search("frio", $clima); //parámetros: qué va a buscar y dónde; en ese array
    break;
    case "ubicacion":
      echo array_search("Norte", $ubicacion);
    break;
    case "turismo":
      echo array_search("mar", $turismo);
    break;
    
  }
}
recomendacion();

?>