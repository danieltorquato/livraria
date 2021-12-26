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
    background-color: rgb(150, 204, 150);
    width: 900px;
    height: 700px;
    border-radius: 10px;
    font-family: cursive;
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
    margin-top: 30%;
}
h2{
    font-family: fantasy;
    text-align: center;
    word-spacing: 5px;
    letter-spacing: 1px;
}
input{
    margin: 1.2%;
    border-radius: 4px;
    outline: none;
    font-size: 13pt;
}
.livro{
    font-family: cursive;
    width: 600px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.autor{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.sexo{
    font-family: cursive;
    width: 20px;
    height: 25px;
    margin: 0%;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.sexo1{
    font-family: cursive;
    width: 20px;
    height: 25px;
    margin: 0%;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.paginas{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.editora{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.valor{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.UF{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.ano{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
}
.desc{
    font-family: cursive;
    width: 600px;
    height: 150px;
    position: relative;
    left: 5%;
    padding: auto;
    background-color: royalblue;
}
span{
    font-size: 15pt;
    position: relative;
    left: 5%;
}
.acao{
    font-family: cursive;
    position: relative;
    left: 37%;
    background-color: rgb(38, 224, 38);
    width: 200px;
    height: 30px;
    font-size: 11pt;
}
.acao:hover{
    background-color: rgb(13, 223, 13);
    width: 201px;
    height: 30px;
    cursor: pointer;
    font-size: 12pt;
}
.excluir{
    font-family: cursive;
    position: relative;
    left: 43%;
    background-color: rgb(0, 190, 248);
    width: 100px;
    height: 30px;
    font-size: 11pt;
}
.excluir:hover{
    background-color: rgb(108, 171, 190);
    width: 101px;
    height: 30px;
    cursor: pointer;
    font-size: 12pt;
}
.pesquisa{
    position: relative;
    left: 3%;
    width: 100px;
    height: 30px;
    font-size: 11pt;
}
.pesquisa:hover{
    background-color: silver;
    cursor: pointer;
    width: 101px;
    font-size: 12pt;
}
    </style>
        
    <title>Cadastro de Livros</title>
</head>
<body>
  

     <form  method="get">
        <h1 name="livroadd">Livro Adicionado</h1>
        <input type="submit" name='voltar' class="acao" value="Adicionar Mais"></br> 
        <input type="submit" name='paginainicial' value='Pagina Inicial' class="excluir">
   
   
    </form>
</body>
</html>