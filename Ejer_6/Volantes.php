<?php
$Vol = $_POST["Vol"];
$Pos = $_POST["Pos"];
$Tar = $_POST["Tar"];

$Volante = $Vol * 2000;
$Posters = $Pos * 5000;
$Tarjetas = $Tar * 500;
$pago = $Volante + $Posters + $Tarjetas;

echo "Volantes = ".$Vol." * 2000 <br><br>";
echo "Volantes = ".$Pos." * 5000 <br><br>";
echo "Volantes = ".$Tar." * 500 <br><br>";

echo "El pago total es de ".$pago;

?>