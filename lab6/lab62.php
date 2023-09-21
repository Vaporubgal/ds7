<?php
include ("class_lib.php");

$cliente1 new cliente ("Pepe", 1);
$cliente2 = new cliente ("Roberto", 564);
//mostramos el numero de cada cliente creado

echo "<br> El identificador del cliente 1 es: ".$clientel->dame_numero();
echo "<br> El identificador del cliente 2 es: ".$cliente2->dame_numero ();
?>