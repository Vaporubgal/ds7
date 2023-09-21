<?php
final class ClaseBase {
public function test() {
echo "ClaseBase::test () llamada \n";
}
// Aquí da igual si se declara el método como // final o no
final public function moreTesting() {
echo "ClaseBase::more Testing () llamada \n";
}
}
class ClaseHijo extends ClaseBase {
}

//se está tratando de crear una clase ClaseHijo que intenta extender (heredar) 
//de una clase ClaseBase que ha sido marcada como final. Cuando se declara final
//no se permite que ninguna otra clase la extienda o herede
?>
