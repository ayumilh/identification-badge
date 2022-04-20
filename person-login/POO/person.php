<?php
require ("../connect.php");
class Person{
  private $rm = $_POST['rm'];
  private $name = $_POST['name'];
  private $password = $_POST['password'];
  private $email = $_POST['email'];
  

  function __construct(){
    //mandar para o banco de dados
  }

  function queryBD(){
    $sql_checking_rm = "SELECT * FROM person WHERE rm = " . $this->getRm();
    $sql_query_rm = $mysql->query($sql_checking_rm) or die("Falha na execução do codigo SQL: " . $mysql->error);
    $quality_rm = $sql_query_rm->num_rows;
  }

  function checkLogin(){
    $sql_checking_login = "SELECT * FROM person WHERE email = " . $this->getEmail() . " AND password = " . $this->getPassword();
    $sql_query_login = $mysql->query($sql_checking_login) or die("Falha na execução do codigo SQL: " . $mysql->error);
    $quality_login = $sql_query_login->num_rows();
  }

  # Metodos especias:
  function getRm(){
    return $this->rm;
  }
  function setRm($rm){
    $this->rm = $rm;
  }

  function getName(){
    return $this->rm;
  }
  function setName($name){
    $this->name = $name;
  }

  function getPassword(){
    return $this->password;
  }
  function setPassword($password){
    $this->password = $password;
  }

  function getEmail(){
    return $this->email;
  }
  function setEmail($email){
    $this->email = $email;
  }
}
?>