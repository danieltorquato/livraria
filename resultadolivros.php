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
    left: 30%;
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
.editar{
    font-family: cursive;
    position: relative;
    left: 30%;
    background-color: rgb(228, 175, 31);
    width: 100px;
    height: 30px;
    font-size: 11pt;
}
.editar:hover{
    background-color: rgb(253, 188, 10);
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
  

     <form action="resultadolivros.php" method="get">
        <h1>Cadastro de Livros</h1>
    <span class="span"> Livro: </span> <input type="text" name="livro" class="livro" autofocus="autofocus" value="<?php $livro1->pesquisaLivro();?>">
   


</br>
   <span>Autor:</span>  <input type="text" name="autor"class="autor" value="<?php $livro1->pesquisaAutor();?>">
   <span>Sexo:</span> <input type="radio" name="sexo" value="M" class="sexo"> <span>M</span><input type="radio" name="sexo" value="F" class="sexo1"><span>F</span></br>
   <span>Paginas:</span> <input type="number" name="paginas" class="paginas" value="<?php $livro1->pesquisaPaginas();?>">
   <span>Editora:</span> <input type="text" name="editora" class="editora" value="<?php $livro1->pesquisaEditora();?>"></br>
   <span>UF:</span> <input type="text" name="uf" class="UF" value="<?php $livro1->pesquisaUF();?>">
   <span>Ano:</span> <input type="number" name="ano" class="ano" value="<?php $livro1->pesquisaAno();?>"></br>
   <span>Valor (R$):</span> <input type="number" name="valor" class="valor" value="<?php $livro1->pesquisaValor();?>"></br>
   <span>Descrição:</span> <input type=text name="desc" class="desc" value="<?php $livro1->pesquisaDesc();?>"></br>
 
 <input type="submit" name='editar' value='Editar' class="editar"></br>
   <input type="submit" name='voltar' class="acao" value="Voltar"> 
   

    </form>

</body>

</html>