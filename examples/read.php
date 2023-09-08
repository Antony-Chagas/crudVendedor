<?php

require __DIR__ . "/../vendor/autoload.php";
require __DIR__ . "/../source/Models/Verndedor.php";

//use CoffeeCode\DataLayer\Connect;

//$conn = Connect::getInstance();
//$error = Connect::getError();

//if($error){
//    echo $error->getMessage();
//    die();
//}

//$query = $conn->query("SELECT * FROM vendas");

//var_dump($query->fetchAll());

use Source\Models\Vendas;
use Source\Models\Vendedor;

//Listar vendas
$vendas = new Vendas;
$list = $vendas->find()->fetch(true);
$id = 0;

//Listar vendedores
$vendedor = new Vendedor;
$lista = $vendedor->find()->fetch(true);

/** @var $vendasItem Vendas*/
foreach($list as $vendasItem){
    var_dump($vendasItem->data()); 
    $id = $vendasItem->id_saller;
    
    if ($id === 1) {
        foreach($lista as $vendedorItem){
            var_dump($vendedorItem->data());
           
       }
    } 
    }
    
