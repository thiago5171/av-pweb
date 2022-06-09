<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="style.css">
    <h2>usuários</h2>
</head>
<body>
<table>

    <thead>
    <tr>
        <th scope="col">Id</th>

        <th scope="col">Nome</th>
        <th scope="col">CPF</th>


        </br>

    </tr>
    </thead>

    <tbody>
    <?php
    if (isset($_REQUEST['userLista'])) {

        foreach ($_REQUEST['userLista'] as $user) {


            ?>

            <tr>
                <td>  <?= $user['id'] ?></td>

                <td><?= $user['nome'] ?> </td>
                <td><?= $user['cpf'] ?> </td>
            </tr>

            <?php
        }
    }
    ?>


    </tbody>
</table>

</body>
</html>