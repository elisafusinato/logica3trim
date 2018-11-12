<?php

require __DIR__."/Funcionario.php";
require __DIR__."/Data.php";



//       USUARIO 1 

$usuario1 = new Funcionario();
$usuario1->departamento = "contabilidade";
$usuario1->CPF = "220.644.556-28";
$usuario1->salario = 1000;


$dataEntrada = new Data();
$dataEntrada->dia = 12;
$dataEntrada->mes = 11;
$dataEntrada->ano = 2014;

$usuario1->dataEntrada = $dataEntrada;

$salarioAumento = $usuario1->recebeAumento();
$salarioAnual = $usuario1->calculaGanhoAnual();
print_r($usuario1);
echo $usuario1;


echo "\n \n";

//      USUARIO 2 

$usuario2 = new Funcionario();
$usuario2->departamento = "RH";
$usuario2->CPF = "444.666.942-69";
$usuario2->salario = 2500;


$dataEntrada = new Data();
$dataEntrada->dia = 10;
$dataEntrada->mes = 12;
$dataEntrada->ano = 2007;

$usuario2->dataEntrada = $dataEntrada;

$salarioAumento = $usuario2->recebeAumento();
$salarioAnual = $usuario2->calculaGanhoAnual();
print_r($usuario2);
echo $usuario2;


