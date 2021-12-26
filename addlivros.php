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
form.formcadastro{
    position: relative;
    left: 25%;
    background-color: rgb(150, 204, 150);
    width: 900px;
    height: 700px;
    border-radius: 10px;
    font-family: cursive;

}
form.formpesquisa{
    position: relative;
    left: 25%;
    bottom: 100px;
    background-color: rgb(150, 204, 150);
    width: 900px;
    height: 200px;
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
.excluir{
    font-family: cursive;
    position: relative;
    left: 30%;
    background-color: rgb(248, 0, 0);
    width: 100px;
    height: 30px;
    font-size: 11pt;
}
.excluir:hover{
    background-color: rgb(238, 26, 26);
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
  
<form action="livroadd.php" method="get" class="formcadastro">
    
        <h1>Cadastro de Livros</h1>
   <span class="span"> Livro:</span><input type="text" name="livro" class="livro" autofocus="autofocus"> </br>
   <span>Autor:</span>  <input type="text" name="autor"class="autor">
   <span>Sexo:</span> <input type="radio" name="sexo" value="M" class="sexo"> <span>M</span><input type="radio" name="sexo" value="F" class="sexo1"><span>F</span></br>
   <span>Paginas:</span> <input type="number" name="paginas" class="paginas">
   <span>Editora:</span> <input type="text" name="editora" class="editora"></br>
   <span>UF:</span> <input type="text" name="uf" class="UF">
   <span>Ano:</span> <input type="number" name="ano" class="ano"></br>
   <span>Valor (R$):</span> <input type="number" name="valor" class="valor"></br>
   <span>Descrição:</span> <input type=text name="desc" class="desc"></br>
 
   <input type="submit" name='acao' class="acao" value="Adicionar">
</form>
         <form action="resultadolivros.php" method="get" class="formpesquisa">
        <h2>Pesquisar</h2>
        <span class="span"> Livro:</span><input type="text" name="pesquisacampo" class="livro">

   <input type="submit" name='pesquisa' value="Pesquisar" class="pesquisa">
   
    </form>
</body>

</html>