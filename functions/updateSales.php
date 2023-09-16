<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;


$idSaler = filter_input(INPUT_POST,'idSaler');
$venda2 = filter_input(INPUT_POST,'venda');
$idSeller = filter_input(INPUT_POST,'idSeller');

//Atualizar dados de uma venda
$vendas = (new Vendas())->findById($idSaler);
$vendas->value = $venda2;
$vendas->commission	= $vendas->value * 0.085;
$vendas->id_saller = $idSeller;
$vendas->save();
echo "<h3>Última venda Atualizada:</h3>";
var_dump($vendas->data());