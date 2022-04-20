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
  if(!isset($_SESSION)){
    session_start();
  }

  if(!isset($_SESSION['id'])){
    die("Voce não pode acessar está pagina, verifique seu login. <p><a href=\"sign_in.html\">Sign-in</a></p>");
  }
?>

</body>
</html>