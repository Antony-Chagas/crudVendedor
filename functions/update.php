<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Atualizar dados de uma venda
$vendas = (new Vendas())->findById(1);
$vendas->value = 350;
$vendas->commission	= $vendas->value * 0.085;
$vendas->id_saller = 1;
//$vendas->save();

var_dump($vendas);

//Atualizar dados do vendedor
$vendedor = (new Vendedor())->findById(1);
$vendedor->name = "Samuel Marcos";
$vendedor->email =  "samuel.chagas@gmail.com";
//$vendedor->save();

var_dump($vendedor);