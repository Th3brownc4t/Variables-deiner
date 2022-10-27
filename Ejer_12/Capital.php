<?php
$capital = $_GET["capital"];
$interes1 = $capital * 0.02;
$interes2 = $capital * 0.045;
$interes3 = $capital * 0.07;
$resultado1 = $capital + $interes1;
$resultado2 = $capital + $interes2;
$resultado3 = $capital + $interes3;

if($capital < 500){
    if($capital > 0){
        echo "Capital ingresado = ".$capital."<br><br>Intereses = ".$interes1."<br><br>Total = ".$resultado1;
    }else{
        echo "Debe digitar un numero valido";
    }
}
if($capital >= 500){
    if($capital < 1500){
        echo "Capital ingresado = ".$capital."<br><br>Intereses = ".$interes2."<br><br>Total = ".$resultado2;
    }
}
if($capital >= 1500){
    echo "Capital ingresado = ".$capital."<br><br>Intereses = ".$interes3."<br><br>Total = ".$resultado3;
}
?>