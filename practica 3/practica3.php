<?php

   $nombre= $_GET["nombre"];
   echo "El nombre del cliente es:". $nombre;
   echo "<br><br>";

   $edad = $_GET["edad"];

   echo "La edad del cliente es:". $edad;
   echo "<br><br>";

   $fecha_nacimiento = $_GET["fecha_nacimiento"];

   echo "La fecha de nacimiento del cliente es:". $fecha_nacimiento;
   echo "<br><br>";

   $sexo = $_GET["sexo"];

   echo "El sexo de el cliente es:". $sexo;
   echo "<br><br>";

   $areas= $_GET["areas"];

   echo "Las areas que le gustan al cliente son: <br><br>";
  for ($i=0; $i < count($areas) ; $i++) { 
  	echo $areas[$i]. "<br>";
  }
  echo "Escobar Nieto Iván Arturo";
   
?>