<?php
/**Tipos de dados*/

//tipos básicos
$nome="HCODE";
$Site='www.hcode.com.br';
$ano=1990;
$salario=555.99;
$bloqueado=false;

//tipos avançados
$frutas=array("abacaxi","laranja","manga");
echo $frutas[2];

//objeto
$nascimento=new DateTime();

$arquivo=fopen("14Variaveis.php", "r");

$nulo=NULL;
echo $nulo;
?>
