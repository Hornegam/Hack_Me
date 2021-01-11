<?php

require_once "../_Models/_NotesModels.php";

session_cache_expire(60);
session_start();

class _NotesController extends _NotesModels{
    public function SelecionarTodasNotas(){
        $notas = $this->SelectAllNotes();
        
        $notas2 = [];
        $i = 0;
        while($rows = $notas->fetch_assoc()){
            $wow = [
                "nota" => $rows["nota"],
                "hora" => $rows["horario"],
                "criado" => $rows["nome"],
                "arquivo" => $rows["caminho"]
            ];
            $notas2[$i] = $wow;
            $i++;
        }

        return json_encode($notas2);
    }

    public function CadastrarNota($dados){
        $DadosUsuario = json_decode($dados,true);

        $nota = $DadosUsuario["Nota"];
        $usuario = $DadosUsuario["Usuario"];

        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $nota))
            {
                return json_encode(0);
            }
            

        $retorno = $this->InsertNote($nota,$usuario);

        if($retorno != ""){
            return json_encode($retorno);
        }else{
            return json_encode(0);
        }
    }

    public function UploadFile(){
        if(isset($_FILES['file']['name'])){
            
            // file name
            
            $id_post = $_POST['id_post'];
            $filename = $id_post.'-'.$_FILES['file']['name'];
            
            // Location
            $location = '../store/'.$filename;
            
            // file extension
            $file_extension = pathinfo($location, PATHINFO_EXTENSION);
            $file_extension = strtolower($file_extension);

            // Valid extensions
            $valid_ext = array("jpg","png","jpeg","jpeg");
         
            $response = 0;
            if(in_array($file_extension,$valid_ext)){
               // Upload file
               if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
                  $response = 1;
               } 
            }

            $retorno = $this->InsertFileDatabase($id_post,$filename);

            if($retorno != ""){
                return json_encode($retorno);
            }else{
                return json_encode(0);
            }

         }
    }
}