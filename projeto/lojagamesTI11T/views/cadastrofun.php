<?php
include_once("../models/conexao.php");
include_once("../models/bancofun.php");
include_once("../models/bancoUsuario.php");
include_once("header.php");
?>
<form action="cadastrofun.php" method="Post">
<div class="container m-5 p-5">
<div class="row mb-3">
    <label for="inputcod" class="col-sm-2 col-form-label">Digite o Código do usuario</label>
    <div class="col-sm-3">
      <input type="text" require name="codUsu" class="form-control" id="inputCod">
    </div>
    <div class="col-sm-3">
    <button type="submit" class="btn btn-dark">Pesquisar </button>
    </div>
</div>
</div>
</form>
<?php
$codUsu = isset($_POST['codUsu']) ? $_POST['codUsu'] : 0;
$usuario=listaTudoUsuario($conexao,$codUsu);
if($usuario){
 ?>  
<form method="POST" action="../controllers/inserirfun.php">
    <p>Código Usuário <input type="text" name="codUsu" value="<?=$usuario['codUsu']?>"></p>    
    <p>Nome <input type="text" name="nomeFun"></p>
    <p>Função <input type="text" name="funcaoFun"></p>
    <p>Telefone <input type="text" name="foneFun"> </p>
    <p>Data de Nascimento <input type="date" name="datanasFun"></p>
    <button type="submit" class="btn btn-dark">Salvar</button>
</form>
</div>
</div>
<?php
}
include_once("footer.php");
?>