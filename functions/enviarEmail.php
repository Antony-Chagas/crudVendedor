<?php

require __DIR__ . "/../vendor/autoload.php";

use CoffeeCode\DataLayer\Connect;

try{
    $query = Connect::getInstance()->query("SELECT value, created_at FROM vendas");
    var_dump(
        $query,
        $query->rowCount(),
        $query->fetchAll());
} catch (PDOException $exception) {
    var_dump($exception);
}

echo "Convertendo objeto em string: ";
$convertString = (array)$query;
echo $convertString;