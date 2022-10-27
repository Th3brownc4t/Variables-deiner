<?php
$nombre_e = $_POST["nombre-estudiante"];
$nombre_a = $_POST["nombre-asignatura"];
$nota1 = $_POST["nota-1"];
$nota2 = $_POST["nota-2"];
$nota3 = $_POST["nota-3"];
$promedio = ($nota1 + $nota2 + $nota3) / 3;

echo "La nota de ".$nombre_e." en la asignatura de ".$nombre_a." es de:<br>".$promedio;

?>