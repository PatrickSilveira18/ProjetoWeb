<?php 
    require "dados.php";

    if(!isset($_GET["i"])){
        header("location: index.php");
        die;
    }

    $i = $_GET["i"];

    if(isset($produtos[$i])){
        $produto = $produtos[$i];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php if(isset($produto)){ ?>
            <div>
                <img src="<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
            </div>
            <div>
                <h3><?=$produto["nome"]?></h3>
                <h4><?=$produto["preco"]?></h4>
                <p><?=$produto["descricao"]?></p>
            </div>
        <?php 
            }else{
                echo"<h3>Produto Não Encontrado</h3>";
            }
        ?>
        <a href="index.php" class="link">Voltar</a>
	</div>
</body>
</html>