<?php

    class Cliente{
public function login(){

    if(isset($_GET['entrar'])&&$_GET['login']=='ADMIN'&&$_GET['senha']=='Dan123'){
        header('Location:menu.php');
    }elseif($_GET['login']!='ADMIN'||$_GET['senha']!='Dan123'){
        
    
      ?>
        <script> 
        
            alert("Login inválido!");
        
            
            </script>
<?php
   }
    }
public function cadastrarCliente(){
    if (isset($_GET['salvarcliente'])) {
        $nome=$_GET['nome'];
         $sexoc=$_GET['sexocliente'];
         $rua=$_GET['rua'];
          $numend=$_GET['numendereco'];
          $bairro=$_GET['bairro'];
           $cidade=$_GET['cidade'];
            $uf=$_GET['uf'];
             $cep=$_GET['cep'];
              $cpf=$_GET['cpf'];
            $data_nasc=$_GET['datanasc'];
$pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql=$pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?,?,?,?,?,?,?,?,NOW(),1)");
        $sql->execute(array($nome, $sexoc, $rua, $numend,$bairro, $cidade, $uf,$cep,$cpf,$data_nasc));

    }

}
public function pesquisaCliente(){

    if(isset($_GET['pesquisabut'])) {

         $pesquisa="%".trim($_GET['pesqclientes'])."%";
        $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql=$pdo->prepare("SELECT * FROM `clientes` WHERE `nome` LIKE :nome");
        $sql->bindParam(':nome', $pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        ?>
<script>
    document.getElementById('rua').value='<?php foreach($resultado as $value){

            echo $value['RUA'];
        }?>';
    document.getElementById('nome').value='<?php foreach($resultado as $value){

            echo $value['NOME'];
        }?>';
        document.getElementById('cidade').value='<?php foreach($resultado as $value){

            echo $value['CIDADE'];
        }?>';
        document.getElementById('bairro').value='<?php foreach($resultado as $value){

            echo $value['BAIRRO'];
        }?>';
        document.getElementById('uf').value='<?php foreach($resultado as $value){

            echo $value['UF'];
        }?>';
         document.getElementById('numendereco').value='<?php foreach($resultado as $value){

            echo $value['END_NUMERO'];
        }?>';
        document.getElementById('cep').value='<?php foreach($resultado as $value){

            echo $value['CEP'];
        }?>';
         document.getElementById('cpf').value='<?php foreach($resultado as $value){

            echo $value['CPF'];
        }?>';
        document.getElementById('datanasc').value='<?php foreach($resultado as $value){

            echo $value['DATA_NASC'];
        }?>';
document.getElementById('f').value='<?php foreach($resultado as $value){

            echo $value['SEXO'];
        }?>';
        document.getElementById('m').value='<?php foreach($resultado as $value){

            echo $value['SEXO'];
        }?>';


         if(document.getElementById("m").value=="M"){
          document.getElementById("m").checked = true;
         }else{
            document.getElementById("f").checked = true;
         }
         
</script>
<?php
}


    }

public function pesquisaCep(){

    if(isset($_GET['buscacep'])){
       $cep=urlencode($_GET['cep']);
       $url = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json'); 

       $endereco = json_decode($url);
?>
<script>
     document.getElementById('rua').value='<?php echo $endereco->logradouro?>';
     document.getElementById('bairro').value='<?php echo $endereco->bairro?>';
     document.getElementById('cidade').value='<?php echo $endereco->localidade?>';
    document.getElementById('uf').value='<?php echo $endereco->uf?>';
     document.getElementById('cep').value='<?php echo $cep?>';
    
</script>
<?php
          }

}
}

$cliente=New Cliente;

?>