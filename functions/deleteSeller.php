<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";

use Source\Models\Vendedor;

$idSeller = filter_input(INPUT_POST,'idSeller');

//Deletar um vendedor
$vendedor = (new Vendedor())->findById($idSeller);
if($vendedor){
    $vendedor->destroy();
    echo "<h1>Vendedor deletado</h1>";
}else {
  var_dump($vendedor);
}

