<?php 

require_once __DIR__ . '/classes/User.php';

$padrino = new Movie("Il padrino", "Coppola", 1975);
$scarface = new Movie("Scarface", "De Palma", 1983);





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>
  
  
  <h1><?php echo $padrino->name ?> con direttore <?php echo $padrino->director?>  pubblicato nel <?php echo $padrino->year?></h1>

  <h1><?php echo $scarface->name ?> con direttore <?php echo $scarface->director?>  pubblicato nel <?php echo $scarface->year?></h1>

</body>
</html>