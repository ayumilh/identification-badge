<?php
  $name = "Lara Ayumi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Social Links</title>
</head>
<body>
  <main>
    <div class="container">
      
      <div class="avatar">
        <img id="userImage" src="http://lorempixel.com.br/200/200" alt="Foto pessoal">
      </div>
      
      <h1 id="userName"><?php echo $name; ?></h1>
      
      <section>
        <p class="desc"> 
          <img src="img/pin.png" alt="icone de localização"> 
          <label for="" id="userLocation"></label>
        </p>
        
        <p class="desc"> 
          <img src="img/id.png" alt="icone do id"> 
          <label for="" id="userRm">00000</label> 
        </p>
      </section>

      <div id="line"></div>
      
      <p id="userBio">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

      <ul id="socialLinks">
        
        <li class="twitter">
          <a href="https://twitter.com/" target="_blank">
            <img src="img/twitter.svg" alt="ícone twitter" />
          </a>
        </li>
        
        <li class="instagram">
          <a href="https://instagram.com/" target="_blank">
            <img src="img/instagram.svg" alt="ícone instagram" />
          </a>
        </li>

        <li class="linkedin">
          <a href="https://facebook.com/" target="_blank">
            <img src="img/linkedin.svg" alt="ícone linkedin"/>
          </a>
        </li>

        <li class="github">
          <a href="https://github.com/" target="_blank">
            <img src="img/github.svg" alt="ícone github"/>
          </a>
        </li>

      </ul>
        
    </div>
  </main>

  <!-- <script src="script.js"></script> -->
</body>
</html>