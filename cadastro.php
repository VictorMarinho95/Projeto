<!DOCTYPE html>
<html lang="en">
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
    
    <a href="index.php">Voltar</a>
    
    <h1>Cadastro</h1>
    
    <form name="form-cadastro" action="processa-cadastro.php" method="post">
        <p>Nome <input type="text" name="nome" id="nome"  placeholder="Digite seu Nome..."></p>
        
        <p>E-mail <input type="email" name="email" id="email" placeholder="Digite seu E-mail..."></p>
        
        <p>Login <input type="text" name="login" id="login" placeholder="Digite seu Login..."></p>
        
        <p>Senha <input type="password" name="senha" id="senha" placeholder="Digite sua senha..."></p>
        
        <input type="submit" name="botao-cadastrar" value="Cadastrar" >
        
    </form>
    
    
</body>
</html>