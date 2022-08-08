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
    <title>Dona Rita | Marmitas </title>
</head>
<body>
    <main>
        <div class="menu">
        <img  class="logo" src="./Logo Dona Rita.png">
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
        <?php 
            $id = $_GET ['id'];
                foreach($marmitas as $key => $value){  
                    if($value['id'] == $id){                               
        ?>
            <article class="card_prato">
                    <img src=<?=$value['imagem'];?> alt="marmita">
                    <div class="prato__text"></div>
                    <h1><?=$value['titulo'];?></h1>
                    <h4><?=$value['igredientes'];?></h4>
                    <h3><?=$value['tamanho'];?></h3>
                    <h4><?=$value['Preco'];?></h4>
            </article>

           <div class="contato">
                <p>Contato: (99)9999-9999</p>
                <p>Endereço: Valinhos - SP - Boa Vista nº 1878</p>
                <p>Email: Donarita@email.com</p>
            </div>
        <?php 
            } 
        }
        ?>
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