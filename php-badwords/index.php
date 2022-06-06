<?php

  $testoScarface = "

  Elvira Hancock: “Senti caro, chi come quando scopo io, non sono affari tuoi, ok?”

  Tony Montana: “Adesso si che mi piace, vai avanti così che va meglio, pupa.”

  Elvira Hancock: “Non mi chiamare pupa! Io non sono affatto la tua pupa.”

  Tony Montana: “No, ancora no, però tu dammi un po’ di tempo, eh?”

  Elvira Hancock: “Senti, anche se fossi cieca dalla nascita, se fossi disperata, e avessi la bava alla bocca dalla voglia su un’isola deserta, tu saresti l’ultimo con cui scoperei!”
  ";

  $badwords = $_GET['badword'];



  $testoScarfaceCensurato = str_replace($badwords, '***', $testoScarface);

  $length= strlen($testoScarfaceCensurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php badwords</title>
</head>
<body>
  <h1>Dialogo Scarface censurato</h1>
  <p><?php
    echo $testoScarfaceCensurato
  ?></p>
  <br>
  <p>Parola censurata: <?php echo $badwords?></p>
  <br>
  <p>Lunghezza testo censurato: <?php echo $length?> parole.</p>
  
  <h1>Dialogo Scarface Non Censurato</h1>
  <p><?php
    echo $testoScarface
  ?></p>
  
  
</body>
</html>