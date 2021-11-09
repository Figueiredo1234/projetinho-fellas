<?php
    include("../views/header.php");
?>  
<div style="margin-top: 30px;" class="container" text-align="center" bg-secondary >
    <form method="Post" action="../controllers/inserirUsuario.php">
        <p>E-mail <input type="text" name="email"></p>
        <p>Senha<input type="password" name="senha"></p>
        <p>PIN<input type="Text" name="pin"></p>
        <button type="submit">Salvar</button>
    </form>
<?php
include("../views/footer.php");
?>