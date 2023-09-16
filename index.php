<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Incluir vendas</h1>
    <form  method="post" action="functions/createSales.php">
    <label>Valor: </label>
    <input type="double" name="venda"> <br><br>

    <label>ID vendedor: </label>
    <input type="int" name="idSaler"> <br><br>

    <input type="submit" value="Incluir venda">
    </form>

    <h1>Incluir vendedor</h1>
    <form  method="post" action="functions/createSeller.php">
    <label>Nome do vendeor: </label>
    <input type="text" name="name"> <br><br>

    <label>E-mail vendedor: </label>
    <input type="email" name="email"> <br><br>

    <input type="submit" value="Incluir vendedor">
    </form>

    <h1>Ataualizar venda</h1>
    <form  method="post" action="functions/updateSales.php">
    <label>Valor: </label>
    <input type="double" name="venda"> <br><br>

    <label>ID vendedor: </label>
    <input type="int" name="idSeller"> <br><br>

    <label>ID da venda: </label>
    <input type="int" name="idSaler"> <br><br>

    <input type="submit" value="Ataualizar venda">
    </form>


    <h1>Atulizar vendedor</h1>
    <form  method="post" action="functions/updateSeller.php">
    <label>Nome do vendeor: </label>
    <input type="text" name="name"> <br><br>

    <label>E-mail vendedor: </label>
    <input type="email" name="email"> <br><br>

    <label>ID vendedor: </label>
    <input type="int" name="idVendedor"> <br><br>

    <input type="submit" value="Atulizar vendedor">
    </form>

    <h1>Deletar Venda</h1>
    <form  method="post" action="functions/deleteSales.php">

    <label>ID da venda: </label>
    <input type="int" name="idSaler"> <br><br>

    <input type="submit" value="Deletar Venda">
    </form>

    <h1>Deletar Vendedor</h1>
    <form  method="post" action="functions/deleteSeller.php">

    <label>ID do vendedor: </label>
    <input type="int" name="idSeller"> <br><br>

    <input type="submit" value="Deletar Vendedor">
    </form>



</body>
</html>

<?php


