<?php include('buscas.php')?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
    background-color: black;
}
form{
    position: absolute;
    left: 25%;
    background-color: rgb(115, 122, 115);
    width: 900px;
    height: 700px;
    border-radius: 10px;
}
input{
    padding: 7%;
    margin: 30px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 14pt;
    border-radius: 10px;
    background-color: rgb(97, 212, 212);
    position: relative;
    left: 15%;
    top: 20%;
}
input:hover{
    background-color: rgb(64, 200, 218);
    cursor: pointer;
    font-size: 15pt;
}
h1:hover{
    font-family: fantasy;
    text-align: center;
    word-spacing: 10px;
    letter-spacing: 3px;
}
h1{
    font-family: fantasy;
    text-align: center;
    word-spacing: 5px;
    letter-spacing: 1px;
}
    </style>
    <title>Menu Livraria</title>
</head>
<body>

    <form method="get">
        <h1>Menu Principal</h1>
    <input type="submit" name="cadastrocliente" value="Cadastrar Cliente">
    <input type="submit" name="cadastrolivro" value="Cadastrar Livro">
</form>

</body>
</html>