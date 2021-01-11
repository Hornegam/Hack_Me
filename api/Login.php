
<?php
require_once '../_Controllers/_LoginController.php';
global $conexao;
 
	$request_method=$_SERVER["REQUEST_METHOD"];
    $LoginController = new _LoginController(); 


    switch($request_method)
	{


        case 'POST':
            $nome = $_POST["nome"];
            $senha = $_POST["senha"];

           echo $LoginController->LoginUsuario($nome,$senha);
        break;


        case 'PUT':
			$json = file_get_contents('php://input');

           echo $LoginController->CadastrarUsuario($json);
        break;

		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}





?>