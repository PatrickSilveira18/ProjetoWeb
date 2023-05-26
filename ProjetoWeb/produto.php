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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <a href="produto.html">Categorias</a>
            <a href="">Ofertas do dia</a>
            <a href="">Histórico</a>
            <a href="">Moda</a>
            <a href="">Vender</a>
            <a href="">Contato</a>
        </nav>
        </div>
    </header>
    <main>
        <div id="anuncio">
            <?php if(isset($produto)){ ?>
                <div class="imagens">
                    <img src="<?=$produto["imagem"]?>" alt="<?=$produto["nome"]?>">
                </div>
                <div class="info-anuncio">
                    <h2><?=$produto["nome"]?></h2>
                    <h3><?=$produto["preco"]?></h3>
                    <p><?=$produto["descricao"]?></p>
                    <div class="buttons-container">
                        <button class="button-compra">Comprar</button>
                        <button class="button-carrinho">Adicionar ao Carrinho</button>
                    </div>
                </div>  
        </div>
        <?php 
        }else{
            echo"<h3>Produto Não Encontrado</h3>";
        }
        ?>    
    </main>
    <footer>
        <div> 
        <img src="img/logo.png" alt="Logo Souls Store">
        </div>
        <div class="footer-container">
      <p>© 2023 Souls Store. Todos os direitos reservados.</p>
      <nav>
        <ul>
          <li><a href="#">Política de Privacidade</a></li>
          <li><a href="#">Termos de Uso</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </nav>
    </div>
    </footer>
</body>
</html>