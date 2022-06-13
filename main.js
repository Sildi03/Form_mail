// controllo pulsante 

function controllo_privacy(){
  if(document.getElementById("privacy").checked == true){
    document.getElementById("send_button").removeAttribute("disabled");
  } else {
    document.getElementById("send_button").setAttribute("disabled", "false");

  }
}

// controllo selezione

function controllo_form(){
  if ((document.getElementById("nome").value == "") || (document.getElementById("cognome").value == "") || (document.getElementById("email").value == "") || (document.getElementById("indirizzo").value == "")){
    document.getElementById("errors").classList.add("show_errors");
  }
}


