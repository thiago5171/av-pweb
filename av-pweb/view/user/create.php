<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <h1>Cadastro de usuário</h1>

</head>
<body>
<?php
if ($_REQUEST)
    if ($_REQUEST['sucesso'] == true)
        echo "Usuário " . $_REQUEST["userNome"] . " inserido com sucesso";
?>
<form action="../../index.php?classe=User&acao=create" method="post">

    Nome:<input name="nome"/>   </br>
    Cpf:<input name="cpf"/>   </br>
    Password:<input name="password" type="password"/>   </br>

    <input type="submit"/>
</form>

</body>
</html>