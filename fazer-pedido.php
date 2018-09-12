
<?php

    require 'connection.php';
    require 'database.php';
    require 'config.php';
    
    $produtos = DBRead("produtos");
    $pizzas = DBRead("produtos", "WHERE produto_categoria = 1");
    $bebidas = DBRead("produtos", "WHERE produto_categoria = 2");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fazer Pedido</title>
</head>
<body>
   <a href="inicio.php">Voltar</a>
    
    <h1>Pizza Web</h1>
    
    <h2>Fazer Pedido</h2>
    
    <div>
        <h4>Escolha sua Pizza!</h4>
        
        <form action="valida-fazer-pedido.php" method="post">
         <p>Pizza 01</p>
          <input list="pizza">
          <datalist id="pizza">
          <option value="nenhum">
           <?php
            foreach($pizzas as $value) {
                
                echo "<option value=".$value['produto_nome'].">";
                
            }
                ?>
          </datalist> 
          
          <p>Pizza 02</p>
          <input list="pizza-02">
          <datalist id="pizza-02">
          <option value="nenhum">
           <?php
            foreach($pizzas as $value) {
                
                echo "<option value=".$value['produto_nome'].">";
                
            }
                ?>
          </datalist> 
          
                
        </form>
        
        <div>
        <h4>Escolha sua Bebida!</h4>
        
        <form action="valida-fazer-pedido.php" method="post">
         <p>Pizza 01</p>
          <input list="bebida">
          <datalist id="bebida">
          <option value="nenhum">
           <?php
            foreach($bebidas as $value) {
                
                echo "<option value=".$value['produto_nome'].">";
                
            }
                ?>
          </datalist> 
          
          <p>Pizza 02</p>
          <input list="bebida-02">
          <datalist id="bebida-02">
          <option value="nenhum">
           <?php
            foreach($bebidas as $value) {
                
                echo "<option value=".$value['produto_nome'].">";
                
            }
                ?>
          </datalist> 
          
                
        </form>
        
        
        
    </div>
    
    <div>
       <h3>Cardápio</h3>
        <div id="pizzas">
            <h4>Pizzas</h4>
        
        <table border="1">
            <tr>
               <th>Código</th><th>Produto</th><th>Preço</th>
               <th>Categoria</th>
            </tr>
            <?php
            
            foreach($pizzas as $value) {
                echo '<tr><td>'.$value["produto_id"].'</td><td>'.$value["produto_nome"].'</td><td>'.$value["produto_valor"].'</td><td>'.$value["produto_categoria"].'</td></tr>';
                
               
            }
            
            ?>
        </table>
        </div>
            
        <div id="Bebibas">
            <h4>Bebidas</h4>
        
        <table border="1">
            <tr>
               <th>Código</th><th>Produto</th><th>Preço</th>
               <th>Categoria</th>
            </tr>
            <?php
            
            foreach($bebidas as $value) {
                echo '<tr><td>'.$value["produto_id"].'</td><td>'.$value["produto_nome"].'</td><td>'.$value["produto_valor"].'</td><td>'.$value["produto_categoria"].'</td></tr>';
            }
            
            ?>
        </table>
        </div>
        
    </div>
    
</body>
</html>