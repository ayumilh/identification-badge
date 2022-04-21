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

  if(isset($_POST['send'])){

    $name = $_POST['name'];
    $github = $_POST['github'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $avatar = $_FILES['avatar']['name'];
    $uploadDir = "../img-bd/";

    if(strlen($_POST['email']) == 0 || strlen($_POST['password']) == 0){
      echo '  :(   Falha ao fazer login, verifique o email ou senha. <a href="sign_up.html">Voltar</a>';
    } else{
      // Verificar pela ID, se já existir direcionar o usuario para a pagina de sign-in

      $sql_email_password = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
      $sql_query = $mysql->query($sql_email_password) or die("Falha na execução do codigo SQL: " . $mysql->error);
      $quality = $sql_query->num_rows;
      
      if($quality == 1){ 
        echo "  :(  Não foi possivel completa o cadastro, essa conta já existe. Verifique a senha ou e-mail.";

      } elseif($quality == 0){

        $separar = explode(".", $avatar);
        $separar = array_reverse($separar);
        $extensao = $separar[0];
        $avatarBD = $name . '.' . $extensao;

        if(move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadDir . $avatarBD)){
          $uploadFile = $uploadDir . $avatarBD;
          echo "Imagem enviada com sucesso";
        }else{
          echo "não foi possível concluir o upload da imagem.";
        }
        
        $mysql->query("INSERT INTO register VALUES(null, '$name', '$github', '$email', '$password', '$uploadFile');");
        header("location: ../sign_in.php");
        
      }

    }
  }
?>
</body>
</html>