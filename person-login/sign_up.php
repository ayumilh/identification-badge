<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign-Up</title>
</head>
<body>
<?php
  include("connect.php");

  if(isset($_POST['send'])){

    $rm = $_POST['rm'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    #Verificar a existencia da conta ja com o while?
    if(strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0){
      echo '  :(   Falha ao fazer login, verifique o email ou senha. <a href="sign_Up.html">Voltar</a>';
    } else{

      $sql_checking_rm = "SELECT * FROM person WHERE rm = $rm";
      $sql_query_rm = $mysql->query($sql_checking_rm) or die("Falha na execução do codigo SQL: " . $mysql->error);
      $quality_rm = $sql_query_rm->num_rows;

      if($quality_rm == 1){
        echo '  :(  Rm já existe. Verifique a senha ou e-mail.';
        
      }else{
  
        $sql_email_password = "SELECT * FROM person WHERE email = '$email' AND password = '$password'";
        $sql_query = $mysql->query($sql_email_password) or die("Falha na execução do codigo SQL: " . $mysql->error);
        $quality = $sql_query->num_rows;
        
        if($quality == 1){ 
          echo "  :(  Não foi possivel completa o cadastro, essa conta já existe. Verifique a senha ou e-mail.";

        } elseif($quality == 0){

          $user = $sql_query->fetch_assoc();

          if(!isset($_SESSION)){
            session_start();
          }
          
          $_SESSION["email"] = $user["email"];
          $_SESSION["password"] = $user["password"];
          
          $mysql->query("INSERT INTO Person(Rm, User, Password, Email) VALUES ('$rm', '$name', '$password', '$email');");
          echo "  :)  $name seu cadastro foi feito com sucesso!!";
          header("location: home.php");
          
        }
      }
    }
  }
  ?>
</body>
</html>