<?php



echo "Logue novamente";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hack-Me</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../js/login.js"></script>
</head>
<body>
<div class="login-page">
  <div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Já registrado ?<a href="#"> Entre</a></p>
    </form>
    <form class="login-form" method="post" action="../../api/Login.php" id="login">
      <input type="text" placeholder="Usuário" id="usuario" name="nome" required/>
      <input type="password" placeholder="Senha" id="senha" name="senha" required/>
      <button id="login">Login</button>
      <p class="message">Não tem conta ?<a onclick="Registrar()"> Crie uma conta !</a></p>
    </form>

    <div class="login-form d-none" id="registrar">
      <input type="text" placeholder="Usuário" id="usuario2" name="nome"/>
      <input type="password" placeholder="Senha" id="senha2" name="senha"/>
      <button id="login" onclick="RegistrarUsuario()">Registrar</button>
      <p class="message">Já registrado ?<a onclick="Login()">Entre</a></p>
    </div>

    <div class="login-form d-none" id="cadastrado">
      <p><b>Usuário Cadastrado com Sucesso!</b></p>
      <p class="message">Já registrado ?<a onclick="Login()">Entre</a></p>
    </div>

    <form action="" method="post"></form>
  </div>
</div>
</body>
</html>
