<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-In</title>
</head>
<body>
<?php
  include("connect.php");

  if(isset($_POST['email']) || isset($_POST['password'])){

    $password = $_POST['password'];
    $email = $_POST['email'];

    if(strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0){
      echo '  :(   Falha ao fazer login, verifique o email ou senha. <h4><a href="sign_in.html">voltar</a></h4>';
    }else{
      
      $sql_email_password = "SELECT * FROM person WHERE email = '$email' AND password = '$password'";
      $sql_query = $mysql->query($sql_email_password)or die("Falha ao executação do codigo: " . $mysql->error);
      $quality = $sql_query->num_rows;

      if($quality == 0){

        echo '  :(  Não foi possivel completa o cadastro, conta não encontrada. Verifique a senha ou e-mail. <h4><a href="sign_in.html">voltar</a></h4>';  

      }elseif($quality == 1){

        $user = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
          session_start();
        }

        $_SESSION["email"] = $user["email"];
        $_SESSION["password"] = $user["password"];

        $sql_user = "SELECT * FROM person WHERE email = '$email' AND password = '$password'";
        header("location: home.php");
      }
    }
  }
?>
</body>
</html>