<?php

function inserirCliente($conexao,$codigoUsuFk,$nomeCliente,$cpfCliente,$foneCliente,$dataNascCliente){
    $query="insert into tbclientes(codUsuFk,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFk}','{$nomeCliente}','{$cpfCliente}','{$foneCliente}','{$dataNascCliente}')";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
function alterarCliente($conexao,$codUsuFK,$nomeCli,$cpfCli,$foneCli,$datanasCli){
    $query="update tbclientes set codUsuFK='{$codUsuFK}', nomeCli='{$nomeCli}', cpfCli='{$cpfCli}', foneCli = '{$foneCli}' where datanasCli = 
    '{$datanasCli}' ";
    $resultados=mysqli_query($conexao,$query);
    return $resultados;
}
function listaTudoClientes($conexao){
    $query = "Select * From tbclientes";
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
}
function listaTudoClienteCod($conexao,$codCli){
    $query = "Select * from tbclientes where codCli={$codCli}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}
function listaClienteUsuario($conexao,$codUsuario){
    $query = "Select * from tbusuarios where codUsu={$codUsuario}";
    $resultados = mysqli_query($conexao,$query);
    $resul= mysqli_fetch_array($resultados);
    return $resul;
}
function listaTudoClienteNome($conexao, $nomeCliente){
    $query = "select * from tbclientes where nomeCli like '%{$nomeCliente}%'";
    $resultados = mysqli_query($conexao,$query);
    return $resultados; 
}
function deletarCliente($conexao,$codCli){
    $query="delete from tbclientes where codCli= $codCli";
    $resultados= mysqli_query($conexao,$query);
    return $resultados;
}
?>




