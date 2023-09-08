<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Cadastrar nova venda
$vendas = new Vendas();
$vendas->value = 500;
$vendas->commission	= $vendas->value * 0.085;
$vendas->id_saller = 5;
$vendas->save();

var_dump($vendas);

//Cadastrar novo vendedor
$vendedor = new Vendedor();
$vendedor->name = "Samuel Chagas";
$vendedor->email =  "samuel.chagas@gmail.com";
//$vendedor->save();

var_dump($vendedor);



