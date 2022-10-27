<?php
$nombre = $_GET["nombre"];
$asignatura = $_GET["asignatura"];
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];
$nota3 = $_GET["nota3"];

$porce1 = $nota1 * 0.3;
$porce2 = $nota2 * 0.3;
$porce3 = $nota3 * 0.4;

$notafinal = $porce1 + $porce2 + $porce3;

if ($notafinal >= 4) {
    if (($nota1 > 5) || ($nota2 > 5) || ($nota3 > 5)) {
        echo "digite un numero de entre 0 y 5";
    }else{
        echo "el estudiante ".$nombre." aprobo con una nota de ".$notafinal;
    }
}elseif ($notafinal < 4) {
    if (($nota1 < 0) || ($nota2 < 0) || ($nota3 < 0)) {
        echo "digite un numero de entre 0 y 5";
    }else{
        echo "el estudiante ".$nombre." reprobo con una nota de ".$notafinal;
    }
}
?>