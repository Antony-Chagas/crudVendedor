<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;

//Cadastrar nova venda
//$vendas = new Vendas();
//$vendas->value = 500;
//$vendas->commission	= $vendas->value * 0.085;
//$vendas->id_saller = 5;
//$vendas->save();

//var_dump($vendas->data());


//---------------------------------------

//Incluir pela guia:

$venda2 = filter_input(INPUT_POST,'venda');
$idSaler = filter_input(INPUT_POST,'idSaler');

//echo $venda2;
//echo $id_saller;

//Cadastrar nova venda
$vendas = new Vendas();
$vendas->value = $venda2;
$vendas->commission	= $vendas->value * 0.085;
$vendas->id_saller = $idSaler;
$vendas->save();
echo "<h3>Última venda incluída:</h3>";
var_dump($vendas->data());





