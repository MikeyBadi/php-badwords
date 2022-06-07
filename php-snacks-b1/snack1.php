<?php
// ## Snack 1
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$partite= [
  [
    'squadra1' => 'padova',
    'squadra2' => 'vicenza',
    'punti1' => 56,
    'punti2' => 32
  ],
  [
    'squadra1' => 'milano',
    'squadra2' => 'torino',
    'punti1' => 44,
    'punti2' => 44,
  ],
  [
    'squadra1' => 'lazio',
    'squadra2' => 'roma',
    'punti1' => 12,
    'punti2' => 78
  ],
  [
    'squadra1' => 'padova',
    'squadra2' => 'verona',
    'punti1' => 33,
    'punti2' => 32
  ],
  [
    'squadra1' => 'vicenza',
    'squadra2' => 'lazio',
    'punti1' => 64,
    'punti2' => 66
  ],
  
];

// var_dump($partite);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <?php for($i=0; $i < count($partite); $i++):?>
      
    <p><?php echo $partite[$i]['squadra1']. ' - ' .$partite[$i]['squadra2']. ' | ' .$partite[$i]['punti1']. ' - ' .$partite[$i]['punti2']?></p>
   
      
    <?php endfor;?>
  </div>
</body>
</html>