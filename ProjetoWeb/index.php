<?php
        require "dados.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">
    <title>Página inicial | Souls Store</title>
</head>
<body>
    <header>
        <div class="logo">
        <a href="index.php" >
                <img src="img/logo.png" alt="Logo Souls Store">
        </a>
        </div>
        <div class="busca">
            <label>
                <input type="text" name="busca" placeholder=" Buscar produtos, marcas e muito mais...">
            </label>
            <button><img src="img/lupa.png" alt="Buscar"></button>
        </div>
        <div class="login">
            <button  class="botao"><a href="">Cadastro</a></button>
            <button  class="botao"><a href="">Entrar</a></button>
        </div>
        <div class="menu">
        <nav>
            <a href="prod.php?i=1">Categorias</a>
            <a href="produto.html">Ofertas do dia</a>
            <a href="produto.html">Histórico</a>
            <a href="produto.html">Moda</a>
            <a href="produto.html">Vender</a>
            <a href="produto.html">Contato</a>
        </nav>
        </div>
    </header>
    <div class="banner">
        <h2>SELEÇÃO DE PRODUTOS</h2>
        <h1>OS MELHORES ELETRODOMÉSTICOS</h1>
        <div class="button">Confira</div>
        <div class="image"></div>
    </div>
    <section>
            <?php foreach($produtos as $i => $produto){ ?>
            <a href="produto.php?i=<?=$i?>" class="produto" onmouseover="">
                <div class="img"><img src="<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>"></div>
                <div class="nome"><?=$produto["nome"]?></div>
                <div class="info">
                    <h3><?=$produto["preco"]?></h3>
                    <p>10x 11,27 sem juros</p>
                    <p>FRETE GRÁTIS</p>
                </div>
                
            </a>
            <?php } ?>

    </section>
    <footer>

    </footer>
</body>
</html>