<?php
include_once("class.php");
$instancia=new listar();
//$instancia->seleccionar_2($termino);
$lista=json_encode($instancia->seleccionar_2($_GET["term"]));

echo $lista;

?>
