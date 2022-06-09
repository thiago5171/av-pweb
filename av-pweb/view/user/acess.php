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
        echo "logado";
?>
</br></br></br>
<button>
    <a href="view/user/editar.php"> editar </a>
</button>
</br></br>
<button>
    <a href="index.php?classe=User&acao=fetch" method="post">Listar </a>
</button>
</br></br>


<button>
    <a href="view/user/delete.php" method="post"> deletar </a>
</button>
</br></br>


</body>
</html>