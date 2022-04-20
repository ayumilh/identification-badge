<?php
  
  $hostname = "localhost";
  $database = "personcard";
  $user = "root";
  $password = "";

  $mysql = new mysqli($hostname, $user, $password, $database);
  if ($mysql->connect_errno){
    die( "Falha ao conectar: (" . $mysql->connect_errno . ") " . $mysql->connect_error);
  }
?>