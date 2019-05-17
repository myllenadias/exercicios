<?php

/*1. Faça um algoritmo que:
/• leia 20 números inteiros;
/• escreva os números que são negativos;
/• escreva a média dos números positivos.*/

$contador = 1;
$contador_positivos = 0;
$soma =0;

while($contador<=20){

print "Digite um número: ";
 $numero = (float) fgets (STDIN);

 $contador++; 
if ($numero < 0){
    print " Número é negativo \n \n";
}

elseif($numero >= 0){
    $soma = $soma + $numero;
    $contador_positivos = $contador_positivos + 1;
}
else{

}

$contador=$contador+1;
}
$media = $soma/$contador_positivos;
print "A média dos números positivos é: $media \n";





