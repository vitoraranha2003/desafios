<?php

$altura = 1.75;
$peso = 66;
$numeroimc = $peso/($altura*$altura);
$imc = number_format($numeroimc, 2);

echo "Seu imc é : $imc".PHP_EOL;

if($imc<18.5){
    echo "Imc abaixo do recomendado";
}
else if($imc<25){
    echo "Imc dentro do recomendado";
}
else{
    echo "Imc acima do recomendado";
}