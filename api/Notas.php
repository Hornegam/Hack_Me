
<?php
require_once '../_Controllers/_NotesController.php';
global $conexao;
 
	$request_method=$_SERVER["REQUEST_METHOD"];
    $NotesController = new _NotesController(); 


    switch($request_method)
	{


        case 'GET':

           echo $NotesController->SelecionarTodasNotas();
        break;
        
        case 'POST':
            echo $NotesController->UploadFile();
        break;

        case 'PUT':
			$json = file_get_contents('php://input');

           echo $NotesController->CadastrarNota($json);
        break;

		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
	}





?>