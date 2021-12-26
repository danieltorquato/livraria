<?php include('clientedata.php')
?>
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
form.pesquisa{
    position: relative;
    left: 25%;
    background-color: rgb(110, 204, 110);
    width: 900px;
    height: 170px;
    border-radius: -20px;
    font-family: cursive;
    
}
form.cadastro{
    position: relative;
    left: 25%;
    background-color: rgb(110, 204, 110);
    width: 900px;
    height: 700px;
    border-radius: -20px;
    font-family: cursive;
    bottom: 22px;
}
h1{
    font-family: fantasy;
    text-align: center;
    word-spacing: 5px;
    letter-spacing: 1px;
    position: relative;
    top: 70px;
}
h2{
    font-family: fantasy;
    text-align: center;
    word-spacing: 5px;
    letter-spacing: 1px;
    position: relative;
    top: 0px;
}
input{
    margin: 2%;
    border-radius: 4px;
    outline: none;
    font-size: 13pt;
    
}
.pesquisa1{
    font-family: cursive;
    width: 600px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    top: -20px;
}
.nome{
    font-family: cursive;
    width: 600px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.rua{
    font-family: cursive;
    width: 600px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.sexo{
    font-family: cursive;
    width: 20px;
    height: 25px;
    margin: 0%;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.sexo1{
    font-family: cursive;
    width: 20px;
    height: 25px;
    margin: 0%;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.numendereco{
    font-family: cursive;
    width: 40px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.cidade{
    font-family: cursive;
    width: 300px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.cpf{
    font-family: cursive;
    width: 150px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.bairro{
    font-family: cursive;
    width: 200px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.UF{
    font-family: cursive;
    width: 30px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.cep{
    font-family: cursive;
    width: 170px;
    height: 25px;
    position: relative;
    left: 5%;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
.cepspan{
 position: relative;
    left: 5%;


}
.datanasc{
    font-family: cursive;
    width: 200px;
    height: 30px;
    position: relative;
    left: 5%;
    padding: auto;
    background-color: royalblue;
    position: relative;
    top: 70px;
}
span{
    font-size: 15pt;
    position: relative;
    left: 5%;
    top: 70px;
}
.span1{
    font-size: 15pt;
    position: relative;
    left: 5%;
    top: -20px;
}
.salvar{
    font-family: cursive;
    position: relative;
    left: 30%;
    background-color: rgb(38, 224, 38);
    width: 200px;
    height: 30px;
    font-size: 11pt;
    top: 25%;
}
.salvar:hover{
    background-color: rgb(13, 223, 13);
    width: 201px;
    height: 30px;
    cursor: pointer;
    font-size: 12pt;
}
.descartar{
    font-family: cursive;
    position: relative;
    left: 30%;
    background-color: rgb(248, 0, 0);
    width: 100px;
    height: 30px;
    font-size: 11pt;
    top: 25%;
}
.descartar:hover{
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
.pesquisa2{
    position: relative;
    left: 3%;
    width: 100px;
    height: 30px;
    font-size: 11pt;
 top: -20px;
}
.salvodescartado{
    position: relative;
    left: 45%;
    top: 20%;
    display: none;
}
.barranav{
    position: relative;
    top: -15px;
    width: 850px;
    height: 30px;
    background-color: burlywood;
}
    </style>
    <title>Cadastro de Clientes</title>
</head>
<body>
  <form method="get" class="pesquisa">
    <input type="text" class="barranav" placeholder="Barra de Navegação" name="barranav"> 
    <h2>Pesquisar</h2>
      
       <span class="span1"> Nome:</span><input type="text" name="pesqclientes" class="pesquisa1">
  <input type="submit" name='pesquisabut' value="Pesquisar" class="pesquisa2">
  </form>
  <form method="get" class="cadastro">
       <h1>Cadastro de Clientes</h1>
  <span class="span"> Nome:</span><input type="text" id="nome" name="nome" class="nome">  <span>Sexo:</span> <input type="radio" name="sexocliente" class="sexo" id="m"> <span>M</span><input type="radio" name="sexocliente" class="sexo1" id="f"><span>F</span></br>
  <span>Rua:</span>  <input type="text" name="rua"class="rua" id="rua" value=""> <span>Nº:</span> <input type="number" name="numendereco" class="numendereco" id="numendereco"></br>

  
  <span>Cidade:</span> <input type="text" name="cidade" class="cidade" id="cidade"> <span>Bairro:</span> <input type="text" name="bairro" class="bairro" id="bairro">
  <span>UF:</span> <input type="text" name="uf" class="UF" id="uf"> </br>
  <span class="cepspan">CEP:</span> <input type="text" name="cep" class="cep" id="cep"></br>
  <span>CPF</span> <input type="text" name="cpf" class="cpf" id="cpf">
  <span>Data de Nascimento:</span> <input type="date" name="datanasc" class="datanasc" id="datanasc"></br>
<span class="salvodescartado"></span></br>
  <input type="submit" name='salvarcliente' class="salvar" value="Salvar">
  <input type="submit" name='descartar' value='Descartar' class="descartar"></br>
       
  
   </form>
 <?php  $cliente->pesquisaCliente();?>
</body>

</html>