<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2.php dentro de HTML</title>
</head>
<body>
	<?php
      $numero = rand(1,4);
	  $color = ["#487e8a", "#7747b6", "#85b41d", "#1457c4"];
	  $numcolor = rand(0,3);

	  echo "Numero generado = " . $numero;
	  echo "<div style='color:".$color[$numcolor]."'>Color generado</div>";

	  if($numero ==1){
	?>
	    <h1 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina</h1>

	  <?php }  elseif($numero == 2) { ?>

           <h2 style="color: <?php echo $color[$numcolor]; ?>">Titulo de la pagina 2</h2>

	  <?php } elseif($numero == 3) { ?>

         <h3 style="color: <?php echo $color[$numcolor]; ?>">Titulo 3 la pagina </h3>

	<?php } else { ?>
        
        <h4 style="color: <?php echo $color[$numcolor]; ?>">titulo de la pagina 4</h4> 
	<?php } ?>
	<h2>Escobar Nieto Iván Arturo</h2>
</body>
</html>