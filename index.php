<?php
    include ("dados.php")  
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title> Dona Rita | Marmitas </title>
</head>
<body>
    <main>
        <div class="menu">
            <img class="logo" src="./Logo Dona Rita.png">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Conheça a Dona Rita</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <div class ="fundo">
            <h1> Venha conhecer nossas marmitas !!! </h1>
            <h2>Impossível não voltar novamente</h2>
            <button class="mais"> Saiba Mais</button>
        </div>
            <div class="cards">

            <?php 
                foreach($marmitas as $key => $value){                                  
            ?>
        <article>
                <div class="card">
                    <img class="img__card" src=<?=$value['imagem'];?> alt="marmita">
                    <div class="container">
                        <h4><?=$value['titulo'];?></h4>
                        <button><a href="marmitas.php?id=<?=$value['id'];?>" target="_blank" rel="noopener noreferrer"> Saiba mais </a></button>
                    </div> 
                </div>
        </article>
            <?php } 
            ?>
            </div>
        <footer>
          
            <div class="Nossas páginas">
                <h4>Nossas páginas</h4>
                <p>Home</p>
                <p>Blog</p>
                <p>Conheça a Dona Dirce</p>
                <p>Contato</p>
            </div>
            <div class="Links Úteis">
                <h4>Políticas de Privacidade</h4>
                <p>Aviso Legal</p>
                <p>Termos de Uso</p>
            </div>
            <div class="Sobre o Projeto">
                <h4>Sobre o Projeto</h4>
                <p>Projeto de Divulgação das marmitas da Dona Dirce</p>
            </div>
        </footer>
    <p class="Eu"> Desenvolvido por Rafael Leite Fernandes </p>
    </main>
    
</body>
</html>