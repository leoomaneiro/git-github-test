<?php

$dbhost = "localhost";
$username = "root";
$senha = "";
$name = "megatron";

$conexao = new mysqli($dbhost,$username,$senha,$name);

//if ($conexao->connect_errno){
    //echo "nao";
//}else {
    //echo"sim";
//}
   
if(!isset($_POST["input"])){
  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $telefone = $_POST['telefone'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $query = mysqli_query($conexao, "INSERT INTO megatron (id, nome, telefone, email, mensagem)VALUES ('$id', '$nome', '$telefone', '$email', '$mensagem')");

   if ($query){
    echo 'contato realizado';
   }else {
    echo 'algo deu errado';
   }

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contato megatron</title>
</head>
<body>
  <form method="post">
    <label>id:</label><br></br>
     <input type="text" name="id"><br></br>
     
     <label>nome:</label><br></br>
     <input type="text" name="nome"><br></br>

     <label>telefone:</label><br></br>
     <input type="number" name="telefone"><br></br>

     <label>email:</label><br></br>
     <input type="text" name="email"><br></br>

     <label>mensagem:</label><br></br>
     <input type="text" name="mensagem"><br></br>

     <button name="input">cadastrar</button>
  </form>
</body>
</html>