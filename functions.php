<?php

   function printFaqs ($faqs) {

    foreach ($faqs as $faq) {
       echo $faq["question"]
         .   $faq["answer"];
    }

  }


?>
