<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Vendas.php";

use Source\Models\Vendas;


$idSaler = filter_input(INPUT_POST,'idSaler');
//Deletar um venda
$vendas = (new Vendas())->findById($idSaler);
if($vendas ){
    $vendas->destroy();
    echo "<h1>Venda deletada</h1>";
}else {
    var_dump($vendas);
}



