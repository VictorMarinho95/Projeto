<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        require 'config.php';
        require 'connection.php';
        require 'database.php';
    
    ?>
    
    <h1>Login</h1>
    
    <form action="processa-login" method="post" name="form-login" >
        
        <p>Login <input type="text" name="login" id="login"  placeholder="Login...">
        
        <p>Senha <input type="password" name="senha" id="senha"  placeholder="Senha...">
        <br>
        <br>
        <button type="submit" name="botao-cadastrar">Entrar</button>
        
    </form>
    
    <a href="cadastro.php">Cadastre-se</a>
        
    
</body>
</html>