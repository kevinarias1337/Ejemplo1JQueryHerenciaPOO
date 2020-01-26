<?php
require_once "Sumar.php";
require_once "Resta.php";
require_once "Multiplicar.php";
require_once "Dividir.php";

sleep(1);

$objSuma = new Sumar();
$objResta = new Resta();
$objMultiplicacion = new Multiplicar();
$objDivision = new Dividir();

$numero1 = $_POST["txtnumero1"];
$numero2 = $_POST["txtnumero2"];

if(isset($_POST["btnsumar"])){
    $objSuma->setNumero1($numero1);
    $objSuma->setNumero2($numero2);
    echo $objSuma->sumar();
}
if(isset($_POST["btnrestar"])){
    $objResta->setNumero1($numero1);
    $objResta->setNumero2($numero2);
    echo $objResta->resta();
}
if(isset($_POST["btnmultiplicar"])){
    $objResta->setNumero1($numero1);
    $objResta->setNumero2($numero2);
    echo $objMultiplicacion->multiplicar();
}
if(isset($_POST["btndividir"])){
    $objResta->setNumero1($numero1);
    $objResta->setNumero2($numero2);
    echo $objDivision->dividir();
}

?>