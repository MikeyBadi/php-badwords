

<?php 
// ## Snack 5
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
//aggiungete poi i seguenti snack da realizzare

  $paragrafo = "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio rerum repellat molestias maiores accusantium aut, modi explicabo doloribus! Ex fuga nam fugit saepe facere exercitationem! Exercitationem eligendi quis in provident ratione itaque, ullam, accusamus harum nisi iusto ipsum tempore quaerat natus vitae ipsam maxime sit tempora facere nam culpa eaque. Quia officiis ratione odit similique praesentium, iste vero ad repudiandae iure voluptatem, excepturi, minus deserunt soluta et dignissimos? Suscipit architecto ipsam eaque assumenda earum, quo saepe, excepturi placeat vitae nam quae tempora ducimus soluta et itaque molestias ut repudiandae blanditiis delectus nisi dicta enim? Nihil similique unde quo adipisci esse facilis odit, tempore earum quam quae modi iure ab id deserunt ipsum soluta tenetur rem dolore illo cupiditate dicta dolorem! Vitae ducimus sed dolores dolorum! Voluptatem dicta, nemo quos dignissimos voluptatibus alias consequatur aliquam in nostrum possimus quas porro blanditiis voluptas, sint placeat aliquid maiores laborum doloribus rem quisquam fuga. Accusamus sequi debitis aliquam commodi veniam ipsa repudiandae, quasi consequuntur omnis ullam, quas inventore et magnam nihil dolorem. Modi minima nam odio? Dolores voluptas ad sunt culpa aperiam nesciunt vero, eos inventore accusamus eius? Quidem ipsam optio placeat porro adipisci voluptas cupiditate dolore animi modi labore mollitia fugiat nulla quo ad molestiae aliquam blanditiis necessitatibus, quae officiis. Sed accusamus mollitia nulla culpa a nesciunt nemo at explicabo, sint libero, quibusdam ullam assumenda quia harum perspiciatis iure magnam dignissimos eius odit dolores. Architecto a ipsam doloribus laboriosam iste voluptate numquam amet, veritatis cupiditate. Eos reprehenderit fugiat ea. Repudiandae cumque a vero voluptas porro deserunt ab velit exercitationem possimus obcaecati! Culpa, provident dolorem expedita officia reiciendis impedit cumque consequatur nam fugiat corrupti quo qui eos nihil placeat mollitia vero voluptates repellendus sunt necessitatibus possimus odit deserunt! Qui natus aut, aspernatur illo ea, culpa rem, necessitatibus suscipit accusamus incidunt optio placeat. Quae, reiciendis! ";

  $paragrafiDivisi = explode('.',$paragrafo);
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

  <h3>Testo a paragrafi</h3>
  <?php for($i = 0; $i < count($paragrafiDivisi); $i++):?>
    
      <p><?php echo $paragrafiDivisi[$i] ?></p>

  <?php endfor; ?>
  <hr>
  <h3>Testo intero</h3>
  <p><?php echo $paragrafo?></p>
</body>
</html>