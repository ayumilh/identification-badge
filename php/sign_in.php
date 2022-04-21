<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  include("connect.php");

  if(isset($_POST['email']) || isset($_POST['password'])){

    $password = $_POST['password'];
    $email = $_POST['email'];

    if(strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0){
      echo '  :(   Falha ao fazer login, verifique o email ou senha. <h4><a href="../sign_in.html">voltar</a></h4>';
    }else{
      
      $sql_email_password = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
      $sql_query = $mysql->query($sql_email_password)or die("Falha ao execução do codigo: " . $mysql->error);
      $quality = $sql_query->num_rows;

      if($quality == 0){

        echo '  :(  Não foi possivel completa o cadastro, conta não encontrada. Verifique a senha ou e-mail. <h4><a href="../sign_in.html">voltar</a></h4>';  

      }elseif($quality == 1){

        $sql_user = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
        header("location: ../layout-badge/badge.html");
      }
    }
  }
?>
</body>
</html>