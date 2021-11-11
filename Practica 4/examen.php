<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body style="background-color: #7AE088; text-align: center;">
	<?php
      $calif=0;
      
      $nombre = $_GET["nombre"];
      echo "Nombre completo: " . $nombre . "<br/>";

      $correo = $_GET["correo"];
      echo "Correo electronico: ". $correo . "<br/><br/>";

      $p1 = $_GET["p1"];

      $p2 = $_GET["p2"];

      $p3 = $_GET["p3"];

      $p4 = $_GET["p4"];

      $p5 = $_GET["p5"];

      $p6 = $_GET["p6"];

      $p7 = $_GET["p7"];
      $r7 = "picante";

      $p8 = $_GET["p8"];
      $r8 = "noviembre";

      $p9 = $_GET["p9"];
      $r9 = "buenos";

      $p10 = $_GET["p10"];
      $r10 = "Por supuesto";

      echo "La primera respuesta es: <br>";
      echo "mexico";
      echo "<br><br>";

      if ($p1 == "mexico") {
      	echo "Tu respuesta es correcta";
      	echo "<br><br>";
      	$calif++;
      }if ($p1 == "brazil") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
      }
      if ($p1 == "argentina") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
      }

       echo "La segunda respuesta es: <br>";
      echo "habanero";
      echo "<br><br>";

      if ($p2 == "jalapeño") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";

      }if ($p2 == "habanero") {
      	echo "Tu respuesta es correcta";
      	echo "<br><br>";
      	$calif++;
      }
      if ($p2 == "serrano") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
      }

       echo "La tercera respuesta es: <br>";
      echo "sabritas";
      echo "<br><br>";

      if ($p3 == "lechuga") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";

      }if ($p3 == "sabritas") {
      	echo "Tu respuesta es correcta";
      	echo "<br><br>";
      	$calif++;
      }
      if ($p3 == "tomate") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
      }

      echo "La cuarta respuesta es: <br>";
      echo "verdadero";
      echo "<br><br>";

      if ($p4 == "v") {
      	echo "Tu respuesta es correcta";
      	echo "<br><br>";
        $calif++;

      }if ($p4 == "f") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
       }

      echo "La quinta respuesta es: <br>";
      echo "falso";
      echo "<br><br>";

      if ($p5 == "v") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
        

      }if ($p5 == "f") {
      	echo "Tu respuesta es correcta";
      	echo "<br><br>";
      	$calif++;
       }

       echo "La sexta respuesta es: <br>";
      echo "falso";
      echo "<br><br>";

      if ($p5 == "v") {
      	echo "Tu respuesta es incorrecta";
      	echo "<br><br>";
        

      }if ($p5 == "f") {
      	echo "Tu respuesta es correcta";
      	echo "<br><br>";
      	$calif++;
       }

       echo "La septima respuesta es: <br>";
       echo "picante";
       echo "<br><br>";
       if ($p7 == $r7) {
       	echo "Tu respuesta es correcta";
       	echo "<br><br>";
       	$calif++;
       }else{
       	echo "Tu respuesta esta mal";
       	echo "<br><br>";
       }

       echo "La octava respuesta es: <br>";
       echo "noviembre";
       echo "<br><br>";
       if ($p8 == $r8) {
       	echo "Tu respuesta es correcta";
       	echo "<br><br>";
       	$calif++;
       }else{
       	echo "Tu respuesta esta mal";
       	echo "<br><br>";
       }

       echo "La novena respuesta es: <br>";
       echo "buenos";
       echo "<br><br>";
       if ($p9 == $r9) {
       	echo "Tu respuesta es correcta";
       	echo "<br><br>";
       	$calif++;
       }else{
       	echo "Tu respuesta esta mal";
       	echo "<br><br>";
       }

       echo "La novena respuesta es: <br>";
       echo "Por supuesto";
       echo "<br><br>";
       if ($p10 == $r10) {
       	echo "Tu respuesta es correcta";
       	echo "<br><br>";
       	$calif++;
       }else{
       	echo "Tu respuesta esta mal";
       	echo "<br><br>";
       }

       echo "<br>";
       echo "Tu calificacion es: ". "$calif/10";
       echo "Iván Arturo Escobar Nieto";
	?>

</body>
</html>