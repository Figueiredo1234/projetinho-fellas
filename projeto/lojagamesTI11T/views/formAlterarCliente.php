<?php
    include_once("header.php");
    include_once("../models/conexao.php");
    include_once("../models/bancoCliente.php");
?>  
    <form method="Post" action="../controllers/alterarCliente.php">
<?php
$codCliente = $_POST["codCliAlterar"];
$cliente = listaTudoClienteCod($conexao,$codCliente); 
$codUsuario = $cliente ['codUsuFK'];
$usuario = listaClienteUsuario($conexao,$codUsuario);

?>
        <p>Código Cliente:<input type="text" name="codigoCliente" readonly value="<?=$cliente['codCli'] ?>"></p>
        <p>Código Usuário:<input type="text" name="codUsuFK" value="<?=$cliente['codUsuFK'] ?>"></p>
        <p>E-mail:<input type="email" name="emailUsu" readonly value="<?=$usuario['emailUsu'] ?>"></p>
        <p>nome:<input type="text" name="nomeCli" value="<?=$cliente['nomeCli'] ?>"></p>
        <p>CPF:<input type="text" name="cpfCli" value="<?=$cliente['cpfCli'] ?>"></p>
        <p>Telefone:<input type="text" name="foneCli" value="<?=$cliente['foneCli'] ?>"></p>
        <p>Data de nascimento<input type="date" name="datanasCli" value="<?=$cliente['datanasCli'] ?>"></p>
        <button type="submit">alterar</button>
    </form>
<?php
include("../views/footer.php");
?>