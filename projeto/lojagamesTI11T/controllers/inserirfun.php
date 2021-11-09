<?php
include("../models/conexao.php");
include("../models/bancoUsuario.php");
include("../models/bancofun.php");
include("../views/header.php");
extract($_REQUEST,EXTR_OVERWRITE);
if(inserirfun($conexao,$codUsu,$nomeFun,$funcaoFun,$foneFun,$datanascFun)){
    echo("Funcionario cadastrado com sucesso.");
}else{
    echo("Funcionario não cadastrado.");
}
include("../views/footer.php");
?>