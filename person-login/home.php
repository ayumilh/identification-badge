<?php
include("protect.php");
if(!isset($_SESSION)){
  session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Bem-vindo ao painel</h2>
  <?php echo $_SESSION['id'];  ?>

  <p>
    <a href="exit.php">exit</a>
  </p>
</body>
</html>