<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="img/favicon.ico">
    <title>Google faq PHP</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <!-- Riscrivere questa pagina del sito google https://policies.google.com/faq. Ci sono diverse domande con relative risposte. Gestire il "Database" e la visualizzazione di queste domande e risposte con PHP. -->

  <body>
    <!-- header -->
    <header>
      <div class="nav">

        <div class="google">

          <div class="logo">
            <img src="img/logo.png" alt="logo google">
          </div>

          <h2>Privacy e termini</h2>
        </div>

        <div class="menu">

          <div class="info">
            <ul>
              <li><a href="#">Introduzione</a></li>
              <li><a href="#">Norme sulla privacy</a></li>
              <li><a href="#">Termini di servizio</a></li>
              <li><a href="#">Tecnologie</a></li>
              <li><a class="blu" href="#">Domande frequenti</a></li>
            </ul>
          </div>

          <div class="account">
            <ul>
              <li><a href="#">Account Google</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <!-- main -->
    <main>
      <div class="faqs">

        <!-- php -->
        <?php
          require_once 'db.php';
          require_once 'functions.php';

          echo "In questa pagina ci sono in totale ";
          // funzione che stampa quante faqs ci sono
          printFaqsCount ($faqs);
          echo " domande, con relative risposte. <br>";


          // funzione che stampa in pagina tutte le domande e le risposte
          // printFaqs ($faqs);


          // funzione che stampa in pagina singola faq scelta in ingresso
          printFaqGet ($faqs, $faqGet);

        ?>

      </div>
    </main>

    <!-- footer -->
    <footer>

      <div class="sez-footer">

        <div class="link">
          <ul>
            <li><a href="#">Google</a></li>
            <li><a href="#">Tutto su Google</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Termini</a></li>
          </ul>
        </div>

        <div class="select">

          <div class="icona">
            <img src="img/icona.png" alt="icona">
          </div>

          <select>
            <option>Italiano</option>
            <option>Suomi</option>
            <option>Bahasa Melayu</option>
            <option>Norsk</option>
            <option>Deutsch</option>
            <option>Polski</option>
            <option>English</option>
          </select>

        </div>
      </div>
    </footer>

  </body>
</html>
