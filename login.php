<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "imperium";
$conn = new mysqli($servername, $username, $password, $database) or die('erro');
if(isset($_POST['u_id'])){
    if(strlen($_POST['u_id'])==0){
    }
    else{
        $u_id = $conn->real_escape_string($_POST['u_id']);
        $sql_code = "SELECT * FROM users WHERE u_id = '$u_id'";
        $sql_query = $conn->query($sql_code) or die("falha da execução do codigo".$conn->error);
        $quantidade = $sql_query->num_rows;
        if($quantidade == 1){
            $user = $sql_query->fetch_assoc();
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['u_id']=$user['u_id'];

            header("Location: loja.php");
        }else{
            echo "falha ao logar";
        }
    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" media="(max-width: 800px)" href="stylemobile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;600;900&display=swap" rel="stylesheet">    
    <title>Login</title>
</head>
<body>
    <div class="barra_de_paginas">
        <ul class="paginas">
            <li class="home" id="sp"><a href="index.html">Home</a></li>
            <li class="sobrenos" id="cm"><a href="index.html#sobrenosar">Sobre</a></li>
            <li class="loja" id="cm"><a href="index.html#vitrine">Loja</a></li>
            <li class="login" id="cm"><a href="login.html">Login</a></li>
            <!--<li class="atividades" id="cm"><a href="atividades.html">Atividades</a></li>
            <li class="galeria" id="cm"><a href="galeria.html">Galeria</a></li>
            <li class="treinos" id="cm"><a href="treinos.html">Treinos</a></li>-->
        </ul>
    </div>
    <div class="col-o"></div>
    <div class="col" style="margin-top: 5vw;">
    
    <div class="loginform">
        
        <form action="" method="POST" >
            <label>Faça seu login aqui</label>
                <input type="text" size="50"  placeholder="Pin" name="u_id"><br>
                <a href="senha.html" style="font-size: 20px;  margin-left: 5%; text-decoration: none; color:white;">Esqueci meu pin</a>
            <button type="submit">ENVIAR</button>
            <button type="reset">LIMPAR</button>
        </form>
    </div>
    <div class="logimg"></div>
</div>
<div class="col-o"></div>
</body>
</html>