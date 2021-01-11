<?php

include "../_Config/_config.inc";

class _LoginModels{

public function InsertUser($nome1, $senha1){
    global $conexao;
    $sql = "INSERT INTO USER_TB (nome,senha,id_usuario) VALUES (? , ? , ?)";

    if($statement = mysqli_prepare($conexao, $sql)){
        //Prepara o statement
        mysqli_stmt_bind_param($statement, "ssi", $nome, $senha, $id_usuario);
        
        $nome = $nome1;
        $senha = $senha1;
        $id_usuario = rand(10,1000000);
        mysqli_stmt_execute($statement);
    
        mysqli_stmt_close($statement);
            mysqli_close($conexao);

            return 1;
        } else{
            mysqli_stmt_close($statement);
            mysqli_close($conexao);
            return mysqli_error($link);
    }

}

public function SelectUser($id_user){
    global $conexao;
    $sql = "SELECT * FROM USER_TB WHERE id_usuario = ?";
    $stmt = $conexao->prepare($sql); 
    $stmt->bind_param("i", $id_user);
    $stmt->execute();
    $result = $stmt->get_result(); 
    mysqli_close($conexao);
    return $user = $result->fetch_assoc(); 

}

public function UpdateUser($id_user,$nome1 = "",$senha1 = ""){
    global $conexao;
    if(!empty($nome1)){
        $NomeNaoVazio = true;
    }
    if(!empty($senha)){
        $SenhaNaoVazio = true;
    }

    if($NomeNaoVazio){
        $sql = "UPDATE USER_TB SET nome = (?) WHERE id_usuario = (?)";

        global $conexao;
        $stmt = $conexao->prepare($sql); 
        $stmt->bind_param("si", $nome,$id_user);
        $stmt->execute();
        $result = $stmt->get_result(); 
        mysqli_close($conexao);
         
       return 1;

    }
    if($SenhaNaoVazio){
        $sql = "UPDATE USER_TB SET senha = (?) WHERE id_usuario = (?)";

        global $conexao;
        $stmt = $conexao->prepare($sql); 
        $stmt->bind_param("si", $senha1,$id_user);
        $stmt->execute();
        $result = $stmt->get_result(); 
        mysqli_close($conexao);
         
       return 1;
    }
}

public function Login($nome,$senha){
    global $conexao;
    $sql = "SELECT * FROM USER_TB WHERE nome = ?";
    $stmt = $conexao->prepare($sql); 
    $stmt->bind_param("i", $nome);
    $stmt->execute();
    $result = $stmt->get_result(); 
    mysqli_close($conexao);
    return $result; 
}

public function SelectLastIdUser(){
    global $conexao;

    $sql = "SELECT MAX(id_usuario) FROM USER_TB;";

    mysqli_prepare($conexao, $sql);
    
    $id = $conexao->query($sql);

    mysqli_close($conexao);

    while($row = $id->fetch_assoc()){
        $last_id = $row["MAX(id_usuario)"];
    }
    
    return $last_id;  
}

}
?>