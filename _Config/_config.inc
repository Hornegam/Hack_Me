<?php
    global $conexao ;
    $conexao = mysqli_connect('localhost','root','', 'notas_db');
    mysqli_set_charset($conexao,"utf8");