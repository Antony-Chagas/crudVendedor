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

use CoffeeCode\DataLayer\Connect;
use Source\Models\Vendas;
use Source\Models\Vendedor;

    
echo "Vendas e vendedores:";

try{
    $query = Connect::getInstance()->query(
        "SELECT vds.id, vds.value, vds.id_saller, vds.commission, vds.created_at,
        vende.name, email
        FROM vendas vds
        LEFT JOIN vendedor AS vende ON vende.id=vds.id_saller");
    var_dump(
    //    $query,
    //    $query->rowCount(),
        $query->fetchAll());
} catch (PDOException $exception) {
    var_dump($exception);
}