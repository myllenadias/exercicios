<?php

/*Faça um algoritmo que leia 15 números inteiros e escreva, para cada número lido, se é
par ou ímpar.*/

$numeros_par=0;
$numeros_impar=0;
$contagem=1;

do {
    print "Digite um número: ";
 $numero = (float) fgets (STDIN);

 if ($numero%2==0){
     print "é par \n";
     $numeros_par++;
}

if ($numero%2!=0){
    print "é impar \n";
    $numeros_impar++;
}

$contagem++;} 
while($contagem<=15);


