# CRIAR UMA SESSÃO:

$user = $sql_query->fetch_assoc();

  if(!isset($_SESSION)){
    session_start();
  }
  
  $_SESSION["email"] = $user["email"];
  $_SESSION["password"] = $user["password"];


# Trocar ou não as informações do usuario
  * do Github ou ficar com oq foi cadastrado

## --> sign_up.php    linha 25
  // Verificar pela ID, se já existir direcionar o usuario para a pagina de sign-in