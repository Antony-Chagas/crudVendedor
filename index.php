<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Incluir vendas</h1>
    <form  method="post" action="functions/create.php">
    <label>Valor: </label>
    <input type="double" name="venda"> <br><br>

    <label>ID vendedor: </label>
    <input type="int" name="id_saller"> <br><br>

    <input type="submit" value="Incluir venda">

    </form>
</body>
</html>

<?php


