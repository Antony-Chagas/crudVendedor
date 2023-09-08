<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Listar vendas
$vendas = new Vendas;
$list = $vendas->find()->fetch(true);
$vendastotal = 0;


foreach($list as $vendasItem){
    var_dump($vendasItem->value);
    var_dump($vendasItem->created_at);
}

