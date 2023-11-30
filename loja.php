<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Loja</title>
</head>
<body>
    <div class="barra_de_paginas">
        <ul class="paginas">
            <div class="separador_barra"></div>
            <li class="home" id="sp"><a href="index.html">Home</a></li>
            <li class="sobrenos" id="cm"><a href="sobrenos.html">Sobre</a></li>
            <li class="loja" id="cm"><a href="loja.html">Loja</a></li>
            <li class="login" id="cm"><a href="login.html">Login</a></li>
            <li class="atividades" id="cm"><a href="atividades.html">Atividades</a></li>
            <li class="galeria" id="cm"><a href="galeria.html">Galeria</a></li>
            <li class="treinos" id="cm"><a href="treinos.html">Treinos</a></li>
        </ul>
    </div>
    <div class="loja">
    <form method="POST" action="paginas/pesquisar.php">
        <input type="text" name="pesquisar" placeholder="Pesquisar...">
            <label for="pesquisa"><img src="paginas/img\search.png" style="width:25px;cursor:pointer;"></label>
            <input type="submit" class="psquisa" id="pesquisa" style="display:none;">
        </form>
    <div class="prod">
    <?php  
             
            
            $query = "SELECT * FROM prod";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
            foreach($query_run as $prod)
            {
                
            ?>    
            <div class="produtos">
                <a href="paginas/produto.php?p_id=<?= $prod['p_id']; ?>">
                <img src="paginas/paginasadm/prod/<?php echo $prod['p_img']; ?>">
                <div style="margin-top: 5% !important;" class="desc"><a><?= $prod['p_nome']; ?></a></div>
                <div style="margin-top: 2% !important;" class="preç"><a>R$<?= $prod['p_preco']; ?></a></div>
                </a>
              </div>
            
            <?php
           
              }
              }
            ?>
        </div>
    </div>
    </div>
</body>
<footer>
    Contate nos em: 99999-9999 
</footer>
</html>