<?php
class cliente{

var $nombre;
var $numero;
var $peliculas_alquiladas;

function_construct ($nombre, $numero) {
$this->nombre=$nombre;
$this->numero=$numero;
$this->peliculas_alquiladas=array();
}

function_destruct() {
echo "<br>destruido: ".$this->nombre;
}

function dame_numero () {
return $this->numero;
}
}

$cliente1 new cliente ("Pepe", 1);
$cliente2 new cliente ("Roberto", 564);

echo "<br> El identificador del cliente 1 es: " $cliente1->dame_numero(); 
echo "<br> El identificador del cliente 2 es:" $cliente2->dame_numero();
?>