<html>

<?php


if (isset($_REQUEST['userExibir'])) {
    foreach ($_REQUEST['userExibir'] as $user) {
        ?>
        <h2>Editar usuario</h2>
        <p> Caso queira modificar envie o formulário após as alterações</p>
        <form action="index.php?classe=User&acao=edit" method="post">
            Id: <input readonly name="id" value="<?= $user['id'] ?>"/> <br/>

            Nome: <input name="nome" value="<?= $user['nome'] ?>" type="text"/> <br/>
            CPF: <input name="cpf" value="<?= $user['cpf'] ?>" type="text"/> <br/>
            senha: <input name="password" value="<?= $user['senha'] ?>" type="text"/> <br/>

            <input type="submit" title="Editar"/>
        </form>

        <?php
    }
} else {
    ?>
    <h2>Buscar usuario </h2>
    <p>Digite o 'Id' da usuario</p>
    <form action="../../index.php?classe=User&acao=getByid" method="post">

        <input name="id"/> <br/>

        <input type="submit"/>
    </form>
    <?php
}
?>
</html>
