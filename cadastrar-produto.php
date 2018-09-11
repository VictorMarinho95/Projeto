<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar produtos</title>
</head>
<body>
   <a href="inicio-adm.php">Voltar</a>
    <h1>Cadastro de produtos</h1>
    
    <form name="form-cadastro-produto" action="valida-cadastro-produto.php" method="post">
        
        <p>Nome do produto</p>
        <input type="text" name="produto_nome" id="produto_nome" placeholder="Nome do produto...">
        
        <p>Valor do produto</p>
        <input type="text" name="produto_valor" id="produto_valor" placeholder="Valor do produto...">
        
        
        
        <p>Categoria do produto</p>
        
          <input type="text" name="produto_categoria" id="produto_categoria" placeholder="Digite 1 ou 2..."><br><br>
          
          
        <input type="submit" value="Cadastrar Produto">
        
    </form>
</body>
</html>