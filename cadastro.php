<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastre-se</title>
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
        
        
        
        <p>Dados Pessoais</p>
        
        <p>CPF <input type="text" name="cpf" id="cpf"  placeholder="Digite seu CPF..."></p>
        
        <p>Sexo <input type="text" name="sexo" id="sexo" placeholder="Digite seu sexo..."></p>
        
        <p>Data de nascimento  <input type="date" name="data-nascimento" id="data-nascimento" placeholder="Digite seu Login..."></p>
        
         <p>Endereço</p>
        
        <p>Rua <input type="text" name="rua" id="rua"  placeholder="Digite seu Nome..."></p>
        
        <p>Bairro <input type="text" name="bairro" id="bairro" placeholder="Digite seu bairro..."></p>
        
        <p>Cidade <input type="text" name="cidade" id="cidade" placeholder="Digite sua cidade..."></p>
        
        <p>UF <input type="text" name="uf" id="uf"  placeholder="Digite seu Nome..."></p>
        
        <p>Complemento <input type="text" name="complemento" id="complemento" placeholder="Digite o complemento..."></p>
        
        <p>Referência  <input type="text" name="referencia" id="referencia" placeholder="Digite um ponto de referência..."></p>
        
        <p>Número <input type="text" name="numero" id="numero"  placeholder="Digite seu Nome..."></p>
        
        
        
        
        
        <p>Telefones</p>
        
        <p>Residencial <input type="text" name="telefone-residencial" id="telefone-residencial"  placeholder="Digite seu telefone residêncial..."></p>
        
        <p>Celular <input type="text" name="telefone-celular" id="telefone-celular" placeholder="Digite seu número de celular..."></p>
        
        
        
        
        
        <input type="submit" name="botao-cadastrar" value="Cadastrar" >
        
    </form>
    
    
</body>
</html>