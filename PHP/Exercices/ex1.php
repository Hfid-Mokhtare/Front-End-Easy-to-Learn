<?php

$city="Tangier";
$country="Morocco";
$longText = "This is a long sentence with many words.";

$str= $city.','.$country;
echo $str.'<br>';
echo 'the lengthe of this sentense is : '.strlen($longText).'<br>';
echo 'upper case : '.strtoupper($longText).'<br>';
echo '10 characters from the string : '.substr($longText,0,10).'<br>';

$replaceText= str_replace('long','short',$longText);
echo $replaceText.'<br>';

?>
