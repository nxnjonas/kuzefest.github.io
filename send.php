<?php
  $destino= "kuzefest@delightlab.com";
  $name= $_POST["Name"];
  $email= $_POST["Email"];
  $phone= $_POST["Phone"];
  $city= $_POST["City"];
  $country= $_POST["Country"];
  $content= "Nombre: " . $name . "\nCorreo: " . $email . "\nTeléfono: " . $phone . "\nCiudad: " . $city . "\nPaís: " . $country;
  mail($destino,"Voluntario", $content);
  header("Location:encontactanswer.html");
?>
