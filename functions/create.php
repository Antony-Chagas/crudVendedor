<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Cadastrar nova venda
//$vendas = new Vendas();
//$vendas->value = 500;
//$vendas->commission	= $vendas->value * 0.085;
//$vendas->id_saller = 5;
//$vendas->save();

//var_dump($vendas->data());

//Cadastrar novo vendedor
$vendedor = new Vendedor();
$vendedor->name = "Samuel Chagas";
$vendedor->email =  "samuel.chagas@gmail.com";
//$vendedor->save();
echo "<h3>Ultimo vendedor incluido:</h3>";
var_dump($vendedor->data());

//---------------------------------------

//Incluir pela guia:

$venda2 = filter_input(INPUT_POST,'venda');
$id_saller = filter_input(INPUT_POST,'id_saller');

//echo $venda2;
//echo $id_saller;

//Cadastrar nova venda
$vendas = new Vendas();
$vendas->value = $venda2;
$vendas->commission	= $vendas->value * 0.085;
$vendas->id_saller = $id_saller;
$vendas->save();
echo "<h3>Ultimo venda incluido:</h3>";
var_dump($vendas->data());





