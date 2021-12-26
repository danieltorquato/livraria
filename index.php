<?php include('clientedata.php');
$cliente->login();

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
form.login{
    position: relative;
    left: 25%;
    background-color: rgb(110, 204, 110);
    width: 900px;
    height: 300px;
    border-radius: 10px;
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
    width: 300px;
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
    left: 15%;
    top: 0px;
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
.entrarbut{
    font-family: cursive;
    position: relative;
    left: 42.5%;
    width: 100px;
    height: 30px;
    font-size: 11pt;
 top: -20px;
}
.entrarbut:hover{
    width: 101px;
    height: 30px;
    font-size: 12pt;
}
.salvodescartado{
    position: relative;
    left: 45%;
    top: 20%;
}
.barranav{
    position: relative;
    top: -15px;
    width: 850px;
    height: 30px;
    background-color: burlywood;
}
.login{
    font-family: cursive;
    font-size: 13pt;
    position: relative;
    left: 125px;
}
.senha{
    font-family: cursive;
    font-size: 13pt;
    position: relative;
    left: 119px;
}
    </style>
    <title>Cadastro de Clientes</title>
</head>

<body>
  <form method="get" class="login">
  <br>
    <h2 name='teste'>Login</h2>
      
    <div class="login"><span>Login:</span><input type="text" name="login" class="login" id="login"></div>
      <div class="senha"> <span> Senha:</span> <input type="password" name="senha" class="senha" id="senha"></div>
        <input type="submit" name='entrar' value="Entrar" class="entrarbut" id="entrar">

  </form>

</body>

</html>