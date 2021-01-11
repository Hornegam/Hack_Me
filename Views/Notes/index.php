<?php

session_start();
if(!isset($_SESSION['nome'])){
    header('location: ../Login');
};
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
    <script src="../js/notas.js"></script>
    <script src="https://use.fontawesome.com/7cdda4018d.js"></script>
</head>
<body>
<input type="text" hidden value="<?php echo $_SESSION["id"]?>" id="usuario">
<div class="col-12">
<h1 class="justify-content-center align-items-center d-flex">Hack-me</h1>

<div class="input-group mt-4">
  
    <textarea class="form-control" aria-label="With textarea" id="nota"></textarea>
  </a>
    <input type="file" name="file" id="file" class="inputfile"/>
    <label for="file" class="ml-3"><img class="align-items-center d-flex ml-5 mt-2" src="https://img.icons8.com/doodle/48/000000/plus--v1.png"/> 
      <br>Escolha um arquivo</label>
  
</div>
<div class="justify-content-center align-items-center d-flex mt-3">
  <button class="btn btn-secondary" type="button" onclick="enviar()">Enviar</button>
</div>

</div>

<hr>

<div id="cards" class="ml-5 mr-5 mt-4">
</div>


</body>
</html>
