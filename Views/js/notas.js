function PegaNotas(){
    var url = '../../api/Notas.php'
  
  
    fetch(url)
    .then(function(response){
        response.json().then(function(data){
            
            var tamanho = data.length;
            for(var i = tamanho-1; i>=0;i--){
        
                GeraCardDeNota(data[i].nota,data[i].criado,data[i].hora,data[i].arquivo);
            }
            
        })
    })
    .catch(function(e){
      console.error(e)
    })


}


function GeraCardDeNota(nota, nome, horario,arquivo){

if(arquivo==null){
  arquivo = "index.png"
}
var html = `<div class="card mt-2">

<div class="card-body">
<a href="../../store/${arquivo}" style="cursor: pointer;" target="_blank"><img src="../../store/${arquivo}" alt="" style="border-radius: 50%; width:100px; height: 100px;"></a>

  `+nota+`
</div>
<div class="card-footer text-muted">
  <b>`+nome+`</b> - `+horario+`
</div>
</div>`

var find = document.querySelector("#cards");
let div = document.createElement('div');
div.innerHTML = html;
find.appendChild(div);

}

function enviar(){
    var nota = document.querySelector("#nota");
    var usuario = document.querySelector("#usuario");
    

    if(nota.value.length!=0){
      
      nota.classList.remove("sem-nada");
      var url = '../../api/Notas.php'
      var body = {
        method : 'PUT',
        headers: {
        "Accept": "application/json",
        "Content-Type": "application/json"
            },
        body: JSON.stringify({'Nota': nota.value,
                              'Usuario': usuario.value
        })      
      }
    
    
      fetch(url,body)
      .then(function(response){
          response.json().then((data)=>{
            uploadFile(data);
            document.querySelector("#nota").value = ""
            PegaNotas();
          });
      })
      .catch(function(e){
        console.error(e)
      })
    }else{
      CampoRequirido(nota)
    }
}

function uploadFile(id_post){
  var files = document.getElementById("file").files;

   if(files.length > 0 ){

      var formData = new FormData();
      formData.append("file", files[0]);
      formData.append("id_post",id_post)

      var xhttp = new XMLHttpRequest();

      // Set POST method and ajax file path
      xhttp.open("POST", "../../api/Notas.php", true);

      // call on request changes state
      xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {

           var response = this.responseText;
           if(response == 1){
              alert("Upload successfully.");
           }
         }
      };

      // Send request with data
      xhttp.send(formData);

   }

}

function CampoRequirido(nota){
  nota.classList.add("sem-nada");
}

PegaNotas()