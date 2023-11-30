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
            <li class="login" id="cm"><a href="login.php">Login</a></li>
            <!--<li class="atividades" id="cm"><a href="atividades.html">Atividades</a></li>
            <li class="galeria" id="cm"><a href="galeria.html">Galeria</a></li>
            <li class="treinos" id="cm"><a href="treinos.html">Treinos</a></li>-->
        </ul>
    </div>
<?php
    
    if(isset($_GET['p_id']))
    {
        $p_id = mysqli_real_escape_string($conn, $_GET['p_id']);
        $query = "SELECT * FROM prod WHERE p_id='$p_id' ";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            $prod = mysqli_fetch_array($query_run);
            
            ?>

        <div class="produto_unico" style="text-align: center; padding:20px">
            <div class="produtotela">
                <a><img src="paginasadm/prod/<?php echo $prod['p_img']; ?>" alt="" width="40%" img-responsive img-thumbnail class="produtoimg"></a>
                    <div class="descricaoproduto">
                        <h2 style="margin-top: 20%;"><?=$prod['p_nome'];?></h2>
                        <h3 style="margin-top: 20%;"><b>R$<?=$prod['p_preco'];?></b></h3>   
                        <h4 style="width: 400px;margin-top: 20%;"> <?=$prod['p_desc'];?></h4>
                            <?php
                            echo 
                            '<a style="margin-top: 30%" class="btn btn-dark btn-lg" href="carrinho.php?add=carrinho&p_id='.$prod['p_id'].'">Adicionar ao carrinho</a>';
                                }
                                else
                                {
                                echo "<h4>Nenhum ID encontrado</h4>";
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