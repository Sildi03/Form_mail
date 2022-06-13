<?php 
if (isset($_POST["send_button"])){ //name
  $nome = $_POST["nome"];
  $cognome = $_POST["cognome"];
  $indirizzo = $_POST["indirizzo"];
  $email = $_POST["e-mail"];
  $oggetto = $_POST["oggetto"];
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';


  //DATI DELLA MAIL
  $mailto = "sildi_shyti@outlook.it"; 
  $messaggio = "Gentile amministratore, sei stato contattato da $nome, il suo indirizzo mail è $email.";
  
  if(isset($_POST["altro"])){
    $altro = $_POST["altro"];
    $messaggio .= "L'utente ha lasciato le seguenti informazioni aggiuntive: <p> $altro </p>";
  };

  if(isset($_POST["oggetto"])){
    $oggetto = $_POST["oggetto"];
    $messaggio .= "L'utente ha selezionato $oggetto";
  };

  $messaggio .= "Buona giornata e buon lavoro dal tuo scrip";

  if(mail($mailto, $oggetto, $messaggio, implode("\r\n", $headers))){
    echo "<h1>Mail inviata con successo</h1>";
  } else {
    echo "<h1>si sono verificati degli errori</h1>";
  }
}
?>