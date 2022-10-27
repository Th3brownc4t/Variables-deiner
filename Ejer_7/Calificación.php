<?php
$nombrea = $_POST["Nda"];
$Asignatura = $_POST["Asig"];
$Calificacion = $_POST["Cali"];

if ($Calificacion >= 7) {
    if($Calificacion > 10){
        echo "Debe digitar un numero entre 1 y 10";
    }else{
        echo $nombrea." aprobo la asignatura de ".$Asignatura;
    }
}
if($Calificacion < 7){
    if ($Calificacion > 0) {
        echo "Deiner reprobo la asignatura de ".$Asignatura;
    }else{
        echo "Debe digitar un numero entre 1 y 10";
    }
}
?>