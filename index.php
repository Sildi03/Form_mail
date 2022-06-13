<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MAIL</title>
</head>
<body>
  <div class="posizioni_aperte">
    <h4> 🚀 Lavora con noi! Scopri le posizioni aperte!</h4>
  </div>
  <nav>
  <img src="https://www.yesdesign.it/images/static/yesdesign-w.svg" alt="YESdesign">
    <ul>
      <li>Siti web e-commerce</li>
      <li>Digital marketing</li>
      <li>Web analytics</li>
      <li>clienti e risultati</li>
    </ul>

    <div class="chi_siamo_contattaci">
      <span>Chi siamo</span>
      <span>Contattaci 📞</span>
    </div>
  </nav>

    <div class="titolo_principale">
      <h1>Sviluppatore web</h1>
      <h2>Stiamo cercando uno Sviluppatore Web da integrare nel nostro team tech.</h2>
    </div>

    <div class="chi_cerchiamo">
      <h3>CHI CERCHIAMO?</h3>
      <p>Stiamo cercando uno sviluppatore web da integrare nel nostro team tech che lavora a stretto contatto con il team marketing. L’ambiente è multidisciplinare, questo ti permetterà di accelerare le tue conoscenze e di lavorare a stretto contatto con un team composto anche da figure senior.</p>
    </div>

    <div class="attivita_e_ruolo">
      <h3>ATTIVITA' E RUOLO</h3>
      <ul>
        <li>Sviluppo frontend (HTML/CSS/JS) e backend (PHP, MySQL) per il Web e per integrazione di sistemi</li>
        <li>Supporto tech per attività digital marketing, come Google Tag Manager e Google Analytics</li>
        <li>Attività a supporto per servizi di digital marketing</li>
        <li>Attività complementari, definite sulla base della tua esperienza</li>
      </ul>
    </div>

    <div class="requisiti">
      <h3>REQUISITI</h3>
      <ul>
        <li>Diploma tecnico informatico o un laurea in informatica (o affini)</li>
        <li>Esperienza di almeno 2 anni nello sviluppo web</li>
        <li>Disponibilità oraria full time</li>
        <li>Valutiamo anche candidature di programmatori autodidatti se accompagnata da referenze di progetti realizzati</li>
      </ul>

      <div class="e_mail">
            <div class="contattaci">
              <h1 class="conta">Contattaci</h1>
              <h2 class="conta">Ti risponderemo il prima possibile</h2>
              <!-- DATI IN INPUT -->
              <form action="dash.php" method="post">
                <input name="nome" id="nome" type="text" placeholder="nome*" required>
                <input name="cognome" id="cognome" type="text" placeholder="cognome*" required>
                <input name="e-mail" id="email" type="email" placeholder="e-mail*" required>
                <input name="indirizzo" type="text" placeholder="indirizzo*" required>
                <textarea name="altro" id="" cols="30" rows="10" placeholder="Altro.."></textarea>
                <select name="oggetto" id="selezione">
                  <option value=" - seleziona una posizione aperta"> - seleziona una posizione aperta</option>
                  <option value="Sviluppatore front end">Sviluppatore front end</option>
                  <option value="Sviluppatore back end">Sviluppatore back end</option>
                  <option value="Full stack">Full stack</option>
                </select>
                <p id="errors">si prega di compilare correttamente il form!</p>
                <p>i campo con il segno * sono obbligatori</p>
                <input type="checkbox" id="privacy" onchange="controllo_privacy();" required>ho letto e accetto i termini e le condizioni;
                <input type="submit" name="send_button" value="contattaci" onclick="controllo_form();" id="send_button"  disabled>
              </form>
            </div>
          </div>
    </div>
    <script src="main.js"></script>
</body>
</html>