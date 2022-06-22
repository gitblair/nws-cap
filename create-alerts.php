<?php
$a1 = '<pre>';
$xml=simplexml_load_file("feeds/alert-NYC061.xml") or die("Error: Cannot create object");
$a2 = '<b>' . $xml->generator[0] . '</b>';
$a3 = '<br>';
$a4 = '‣ NYC: ' . $xml->entry[0]->title[0];
//$a5 = '<br>          [' . $xml->entry[0]->updated[0] . ']<br>';
$a5 = '<br>';
$xml=simplexml_load_file("feeds/alert-NJC013.xml") or die("Error: Cannot create object");
$a6 = '‣ NJ: ' . $xml->entry[0]->title[0];
//$a7 = '<br>          [' . $xml->entry[0]->updated[0] . ']<br></pre>';
$a7 = '</pre>';
$alerts = "$a1 $a2 $a3 $a4 $a5 $a6 $a7";
?>
