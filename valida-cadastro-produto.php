
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
      <a href="cadastrar-produto.php">Voltar</a>
       <?php

    require 'connection.php';
    require 'database.php';
    require 'config.php';

    $produto = [];
            
            $produto['produto_nome'] = $_POST['produto_nome'];
            $produto['produto_valor'] = (float)$_POST['produto_valor'];
            $produto['produto_categoria'] = $_POST['produto_categoria'];

            

    var_dump($produto);

    $grava = DBCreate('produtos', $produto);

    if($grava) {
        echo 'Produto cadastrado!';
    } else {
        echo ':/';
    }

?>
</body>
</html>
    <?php

    require 'connection.php';
    require 'database.php';
    require 'config.php';

    $produto = [];
            
            $produto['produto_nome'] = $_POST['produto_nome'];
            $produto['produto_valor'] = (float)$_POST['produto_valor'];
            $produto['produto_categoria'] = $_POST['produto_categoria'];

            

    var_dump($produto);

    $grava = DBCreate('produtos', $produto);

    if($grava) {
        echo 'OK!';
    } else {
        echo ':/';
    }

?>