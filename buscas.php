<?php
class Livro{
    public function cadastrarLivro(){
     if(isset($_GET['acao'])){
        $livro=$_GET['livro'];
        $autor=$_GET['autor'];
        $sexo=$_GET['sexo'];
        $paginas=$_GET['paginas'];
        $editora=$_GET['editora'];
        $valor=$_GET['valor'];
        $uf=$_GET['uf'];
        $ano=$_GET['ano'];
        $desc=$_GET['desc'];
        $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("INSERT INTO `livros` VALUES (null, ?,?,?,?,?,?,?,?,?)");
        $sql -> execute(array($livro,$autor,$sexo,$paginas,$editora,$valor,$uf,$ano,$desc));
        //die();

        }

    }
    public function excluiLivro(){
      
       if(isset($_GET['excluir'])){
            $livro=$_GET['livro'];
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
            $sql = $pdo->prepare("DELETE FROM `livros` WHERE livro=?");
            $sql -> execute(array($livro));
            echo $livro. ' deletado com sucesso';
            //die();
            }

    }
    public function pesquisaLivro(){
      if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultado as $value) {
           
            echo $value['LIVRO']; 
          
        
        }
    }else if(isset($_GET['voltar'])){
        header('Location: addlivros.php');
    }
}
function pesquisaAutor(){
       if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['AUTOR']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaPaginas(){
        if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['PAGINAS']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaEditora(){
       if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['EDITORA']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaUF(){
      if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['UF']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaAno(){
       if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['ANO']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaValor(){
       if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['VALOR']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaDesc(){
       if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['DESCRICAO']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
function pesquisaSexo(){
       if(isset($_GET['pesquisa'])&&$_GET['pesquisacampo']!=null){
            $pesquisa="%".trim($_GET['pesquisacampo'])."%";
            $pdo = new PDO('mysql:host=localhost; dbname=livraria', 'root','231019');
        $sql = $pdo->prepare("SELECT * FROM `livros` WHERE `livro` LIKE :livro");
        $sql ->bindParam(':livro',$pesquisa, PDO::PARAM_STR);
        $sql->execute();
        $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $value) {
           
            echo $value['SEXO']; 
         
        
        }
    }else if($_GET['livro']==null){
        echo "Pesquisa vazia";

    }
}
public function redireciona(){
    if(isset($_GET['paginainicial'])){
        header('Location: menu.php');
    }
    elseif (isset($_GET['descartar'])) {
        header('Location: addclientes.php');
    }elseif (isset($_GET['cadastrocliente'])) {
        header('Location: addclientes.php');
    }
    elseif (isset($_GET['cadastrolivro'])) {
        header('Location: addlivros.php');
    }
    elseif(isset($_GET['pesqclientes'])){
    ?>
        <script language="JavaScript">
           
            alert("Pesquisa!");
        
          
      
          </script>
<?php
    }
}
}
   




$livro1=new Livro;
    $livro1->cadastrarLivro();
      $livro1->excluiLivro();
    $livro1->redireciona();   


?>