function Registrar(){
    document.querySelector("#login").classList.add("d-none");
    document.querySelector("#cadastrado").classList.add("d-none");
    document.querySelector("#registrar").classList.remove("d-none");

    console.log("foi")
}

function Login(){   
    document.querySelector("#cadastrado").classList.add("d-none");
    document.querySelector("#registrar").classList.add("d-none");
    document.querySelector("#login").classList.remove("d-none");
    
    console.log("foi2")
}

function RegistrarUsuario(){
    var usuario = document.querySelector("#usuario2");
    var senha = document.querySelector("#senha2");

    var url = '../../api/Login.php'
    var body = {
      method : 'PUT',
      headers: {
      "Accept": "application/json",
      "Content-Type": "application/json"
          },
      body: JSON.stringify({'Nome': usuario.value,
                            'Senha': senha.value
      })      
  }
  
  
    fetch(url,body)
    .then(function(response){
        document.querySelector("#registrar").classList.add("d-none");
        document.querySelector("#login").classList.add("d-none");
        document.querySelector("#cadastrado").classList.remove("d-none");
    
    })
    .catch(function(e){
      console.error(e)
    })


}