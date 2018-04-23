<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TestPostStage1</title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <input type="number" name="" value="">
    </form>
  </body>
</html>

<!-- /////////////////////////////////////////////////////////// -->

<?php
echo '<h3>Entraînement de switch avec Tableau/Array<h3/>';
// Entraînement de switch avec Tableau/Array
$array = [ 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($array as $nbr) {
  if($nbr % 2 === 0){
    echo 'Ping<br/>';
  }
  else{
    echo 'Pong<br/>';
  }
}
/*-------------------------------*/
echo '<br/><br/>';
echo '<h3>Entraînement de switch en fonction de condition<h3/>';

if((int)20 === (float)20){
  echo 'identiques';
}
else{
  echo 'Different type';
}

/*-------------------------------*/
echo '<br/><br/><br>';
echo '<h3>Entraînement de switch en mode fonction<h3/>';

// Entraînement de switch en mode fonction
$nmbr=5;

if(is_float($nmbr/2)){
  echo "Ping";
  echo "<br/>";
}else{
  echo "Pong";
  echo "<br/>";
}
echo'<br><br>';

/*-------------------------------*/
 ?>
