<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Código</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data de Nascimento</th>
            <th scope="col">Deletar</th>
            <th scope="col">Alterar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $clientes = listaClienteUsuario($conexao,$codUsuario);
        foreach($clientes as $cliente):
        ?>
        <tr>
            <th scope="row"><?=$cliente['codCli']?></th>
            <td><?=$cliente['nomeCli']?></td>
            <td><?=$cliente['cpfCli']?></td>
            <td><?=$cliente['foneCli']?></td>
            <td><?=$cliente['datanasCli']?></td>
            <td>
                <form action="../controllers/deletarCliente.php" method="POST">
                    <input type="hidden" name="codCliDeletar" value="<?=$cliente['codCli']?>">
                    <button type="submit" class="btn-small btn-danger">Deletar</button>
                </form>
            </td>
            <td>
                <form action="alterarcliente.php" method="POST">
                    <input type="hidden" name="codCliAlterar" value="<?=$cliente['codCli']?>">
                    <button type="submit" class="btn-small btn-success">Alterar</button>
                </form>
            </td>
        </tr>
        <?php
        endforeach;
        ?>
    </tbody>
    </table>
<?php
include_once("footer.php");
?>