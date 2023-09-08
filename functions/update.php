<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Atualizar dados de uma venda
$vendas = (new Vendas())->findById(5);
$vendas->value = 350;
$vendas->commission	= $vendas->value * 0.085;
$vendas->id_saller = 1;
//$vendas->save();

echo "<h3>Ultima venda atualizada:</h3>";
var_dump($vendas->data());

//Atualizar dados do vendedor
$vendedor = (new Vendedor())->findById(5);
$vendedor->name = "Samuel Marcos";
$vendedor->email =  "samuel.chagas@gmail.com";
//$vendedor->save();

echo "<h3>Ultimo vendedor atualizado:</h3>";
var_dump($vendedor->data());