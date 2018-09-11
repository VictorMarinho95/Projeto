
<?php

    require 'connection.php';
    require 'database.php';
    require 'config.php';
    

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
        <h4>Escolha seu pedido!</h4>
        
        <form action="valida-fazer-pedido.php" method="post">
          <input list="pizzas">
          <datalist id="pizzas">
            <option value="Internet Explorer">
            <option value="Firefox">
            <option value="Chrome">
            <option value="Opera">
            <option value="Safari">
          </datalist> 
        </form>
        
    </div>
    
    <div>
        <h4>Cardápio</h4>
        
        <table>
            <tr>
               <td>Código</td><td>Produto</td><td>Preço</td>
            </tr>
            <?php
            
                $produtos = DBRead("produtos");
            
                var_dump($produtos);
            
            
            ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
        </table>
            
        
    </div>
    
</body>
</html>