<?php

require_once "../_Models/_LoginModels.php";

session_cache_expire(60);
session_start();

class _LoginController extends _LoginModels{
    public function LoginUsuario($nome,$senha){
        $Logado = false;
        
        $retorno = $this->Login($nome,$senha);
        while($user = $retorno->fetch_assoc()){
            $nomeBanco = $user["nome"];
            $senhaBanco = $user["senha"];
            $id_usuarioBanco = $user["id_usuario"];
        }
        if($nome === $nomeBanco && md5($senha) == $senhaBanco){
            $Logado = true;
        }
        

        if($Logado == true){
            $_SESSION['nome'] = $nomeBanco;
            $_SESSION['id'] = $id_usuarioBanco;
            header('location: ../Views/Notes');
        }else{
            header('location: ../Views/Login');
        }
        
    }

    public function SelecionarUsuario($dados){
        return "Try Again !";
    }

    public function AtualizarUsuario($dados){

    }

    public function CadastrarUsuario($dados){
        $DadosUsuario = json_decode($dados,true);

        $nome = $DadosUsuario["Nome"];
        $senha = $DadosUsuario["Senha"];

        $senha = md5($senha);

        $retorno = $this->InsertUser($nome,$senha);

        if($retorno == 1){
            return json_encode(1);
        }else{
            return json_encode(0);
        }
    }
}