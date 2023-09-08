<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Deletar um venda
$vendas = (new Vendas())->findById(2);
if($vendas ){
    $vendas->destroy();
}else {
    var_dump($vendas);
}

//Deletar um vendedor
$vendedor = (new Vendedor())->findById(2);
if($vendedor){
    $vendedor->destroy();
}else {
  var_dump($vendedor);
}


