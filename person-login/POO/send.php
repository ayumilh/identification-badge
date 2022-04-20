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
include "connect.php";
  $rm = $_POST['rm'];
  $name = $_POST['name'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $git = $_POST['git'];
  $avatar = $_FILES['avatar']['name'];
  $uploadDir = "img/";

  if(isset($_POST['send'])){
    $separar = explode(".",$avatar);
    $separar = array_reverse($separar);
    $extensao = $separar[0];
    $avatar = $rm . "." . $extensao;

    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadDir . $avatar)){
      $uploadFile = $uploadDir . $avatar;
      echo "Arquivo enviado com sucesso! $uploadFile";
    }
    else{
      echo "Não foi possivel concluir o upload do arquivo";
    }

    $mysql->query("INSERT INTO Person(Rm, User, Password, Email) VALUES ('$rm', '$name', '$password', '$email');");
    echo "$name seu cadastro foi feito com sucesso!!";
  }
?>
</body>
</html>