<?php

include "../_Config/_config.inc";

class _NotesModels{

public function InsertNote($note, $user){
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d-m-Y H:i');
    global $conexao;
    $sql = "INSERT INTO NOTAS_TB (id_nota, nota, horario, id_usuario) VALUES (? , ? , ?, ?)";

    if($statement = mysqli_prepare($conexao, $sql)){
        //Prepara o statement
        mysqli_stmt_bind_param($statement, "issi", $id_nota, $nota, $horario, $id_usuario);
        
        $id_nota = rand(10,1000000);
        $nota = $note;
        $horario = $date;
        $id_usuario = $user;
        
        mysqli_stmt_execute($statement);
    
        mysqli_stmt_close($statement);
            mysqli_close($conexao);

            return $id_nota;
        } else{
            mysqli_stmt_close($statement);
            mysqli_close($conexao);
            return mysqli_error($link);
    }

}

public function InsertFileDatabase($id_post,$location){
    global $conexao;
    $sql = "INSERT INTO UPLOAD_TB(id_post,caminho) VALUES(?,?)";
    
    if($statement = mysqli_prepare($conexao, $sql)){
        //Prepara o statement
        mysqli_stmt_bind_param($statement, "is", $id_posti, $location1);
        
        $id_posti = $id_post;
        $location1 = $location;
        
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

public function SelectAllNotes(){
    global $conexao;
    $sql = "SELECT a.id_nota, a.nota, a.horario, b.nome, c.caminho  FROM NOTAS_TB AS a INNER JOIN USER_TB AS b ON (a.id_usuario = b.id_usuario) LEFT JOIN UPLOAD_TB as c ON (c.id_post = a.id_nota);";
    $stmt = $conexao->prepare($sql); 
    $stmt->execute();
    $result = $stmt->get_result(); 
    mysqli_close($conexao);
    return $result;
}

public function SelectUserNotes($id_user){
    global $conexao;
    $sql = "SELECT a.id_nota, a.nota, a.horario, b.nome, c.caminho  FROM NOTAS_TB AS a INNER JOIN USER_TB AS b ON (a.id_usuario = b.id_usuario) LEFT JOIN UPLOAD_TB as c ON (c.id_post = a.id_nota) WHERE a.id_usuario = ?;";
    $stmt = $conexao->prepare($sql); 
    $stmt->execute();
    $result = $stmt->get_result(); 
    mysqli_close($conexao);
    return $result;
}

}
?>