<?php
$edad = $_POST["edad"];
$genero = $_POST["Genero"];

if(($genero == "hombre")&&($edad>=63)){
    echo "Te puedes jubilar";
}elseif(($genero == "mujer")&&($edad>=54)){
    echo "Te puedes jubilar";
}else{
    echo "no te puedes jubilar";
}


?>