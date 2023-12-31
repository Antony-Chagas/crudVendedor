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

    
echo "<h1>Vendas e vendedores:</h1>";

try{
    $query = Connect::getInstance()->query(
        "SELECT vds.id, vds.value, vds.id_saller, vds.commission, vds.created_at,
        vende.name, email
        FROM vendas vds
        LEFT JOIN vendedor AS vende ON vende.id=vds.id_saller");
        
    var_dump(
     //  $query,
     //  $query->rowCount(),
       $query->fetchAll());

      

} catch (PDOException $exception) {
    var_dump($exception);
}

echo "Teste<br>";

$salers = Connect::getInstance()->prepare("SELECT *FROM vendas LIMIT 3");
$salers->execute();
$sellers = Connect::getInstance()->prepare("SELECT *FROM vendedor LIMIT 3");
$sellers->execute();

$sellers->bindColumn("name", $name);
$sellers->bindColumn("email", $email);


foreach($sellers->fetchAll() as $saller){
    echo"{$name}<br>{email}}<br>";
}
