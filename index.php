<?php
$departments = array(
  02 => 'Aisne',
  59 => 'Nord',
  60 => 'Oise',
  62 => 'Pas-de-Calais',
  80 => 'Somme');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Php partie 3 exo5</title>
  </head>
  <body>
    <?php
      foreach ($departments as $value) {
        echo $value . '<br />';
      }
    ?>
  </body>
</html>
