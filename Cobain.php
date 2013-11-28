<?php
$file = fopen("Coba2.csv","r");

while(! feof($file))
  {
  fgetcsv($file);
  }

fclose($file);
?>

