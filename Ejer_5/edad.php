<?php
$edad1 = $_GET["edadmayor"];
$edad2 = $_GET["edadmenor"];
$diferencia = $edad1 - $edad2;
$diferencia2 = $edad2 - $edad1;

if ($edad1 > $edad2) {
    echo "El hermano mayor tiene ".$edad1." años y es mayor por ".$diferencia." años";
}elseif($edad1 < $edad2) {
    echo "El hermano mayor tiene ".$edad2." años y es mayor por ".$diferencia2." años";
}
?>