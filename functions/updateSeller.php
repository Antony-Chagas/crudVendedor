<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";

use Source\Models\Vendedor;

$idVendedor = filter_input(INPUT_POST,'idVendedor');
$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');

//echo $idVendedor;

//Atualizar dados do vendedor
$vendedor = (new Vendedor())->findById($idVendedor);
$vendedor->name = $name;
$vendedor->email =  $email;
$vendedor->save();
echo "<h3>Último vendedor Atualizado :</h3>";
var_dump($vendedor->data());

