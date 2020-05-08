<?php
   //  funzione che stampa in pagina tutte le domande e le risposte
   function printFaqs ($faqs) {

    foreach ($faqs as $faq) {
       echo $faq["question"]
         .   $faq["answer"];
    }

  };

  // funzione che stampa in pagina singola faq scelta in ingresso
  function printFaqGet ($faqs, $faqGet) {

    $faqGet = $_GET["faq"];

    echo $faqs[$_GET["faq"]]["question"]
      .  $faqs[$_GET["faq"]]["answer"];


    echo "Hai selezionato ";
    // funzione che stampa quante faqs ci sono
    printFaqsCount ($faqGet);
    echo " domanda, con relativa risposta. <br>";

  };

  // funzione che stampa quante faqs ci sono
  function printFaqsCount ($faqs){

    $numeroFaqs = count($faqs);

    echo $numeroFaqs;

  };

?>
