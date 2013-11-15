<?php
header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";
echo "<data>";
if (($csvfile = fopen("test2.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
        echo "<tabel_1>";
        echo "<Judul>".$data[0]."</Judul>";
        echo "<Harga>".$data[1]."</Harga>";
        echo "<Asal>".$data[2]."</Asal>";
        echo "</tabel_1>";
    }
}
echo "</data>";
