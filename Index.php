<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $i = 0;
        $context  = stream_context_create(array('http' => array('header' => 'Accept: application/xml')));
        $url = 'http://localhost/testPHP2/sqltoxml.php';
        $xml2 = file_get_contents($url, false, $context);
        $xml3 = file_get_contents('http://localhost/Tugas2ProTif/csvkexml.php', false, $context);
 
        $xml3 = simplexml_load_string($xml3);
        $xml2 = simplexml_load_string($xml2);
        $xml = simplexml_load_file('coba.xml');

        $Cari = $_GET['search'];
          
        $Komik3 = $xml3->tabel_1;
        $Komik2 = $xml2->tabel_1;
        $Komik = $xml->tabel_1;
        $end = FALSE;
        
        while ($end != TRUE){
            if($Cari == $Komik2[$i]->Judul){    
            echo "<p>Judul Komik :        ".$Komik2[$i]->Judul."</p><br/>";
            echo "<p>Harga       :        ".$Komik2[$i]->Harga."</p><br/>";
            echo "<p>Asal Komik  :        ".$Komik2[$i]->Asal."</p><br/>";
            $end = TRUE;    
            }

            else if($Cari == $Komik[$i]->Judul){
            echo "<p>Judul Komik :       ".$Komik[$i]->Judul."</p><br/>";
            echo "<p>Harga       :       ".$Komik[$i]->Harga."</p><br/>";
            echo "<p>Asal Komik  :       ".$Komik[$i]->Asal."</p><br/>";
            $end = TRUE;
            }
            
            else if($Cari == $Komik3[$i]->Judul){    
            echo "<p>Judul Komik :        ".$Komik3[$i]->Judul."</p><br/>";
            echo "<p>Harga       :        ".$Komik3[$i]->Harga."</p><br/>";
            echo "<p>Asal Komik  :        ".$Komik3[$i]->Asal."</p><br/>";
            $end = TRUE;    
            }
            
            else {
                $i = $i +1;
            }
        }
        ?>
    </body>
</html>
