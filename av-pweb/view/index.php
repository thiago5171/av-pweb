<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
    <h2>Realizar login</h2>

</head>
<body>

<?php
if ($_REQUEST)
    if ($_REQUEST['sucesso'] == true)
        echo "Usuário autenticado :)";
?>
    <form action="../index.php?classe=Auth&acao=login" method="post">

        Cpf:<input name="cpf"/>   </br>
        Password:<input name="password" type="password"/>   </br>

        <input type="submit"/>
    </form>
 <h5>Caso não tenha login, realize o cadastro</h5>
    <a href="user/create.php" method="post"> cadastrar </a>

</body>
</html>