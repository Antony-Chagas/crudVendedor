<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";

use Source\Models\Vendedor;

$name = filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST,'email');

//Cadastrar novo vendedor
$vendedor = new Vendedor();
$vendedor->name = $name;
$vendedor->email =  $email;
$vendedor->save();
echo "<h3>Último vendedor incluído:</h3>";
var_dump($vendedor->data());