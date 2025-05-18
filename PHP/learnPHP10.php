<?php
   $var= "my name is ";
   $firstName="Mohamed ali";
   $lastName="zeggaf";
   $fullName=$firstName.$lastName;
   $sentence = "hello every one, $fullName";
   
   echo $sentence;

   echo '<br>this is a link: <br> <a href="http://www.youtube.com">'.$fullName.'</a>';


$Num1=10;
$Num2='10';

if($Num1==$Num2 and $Num1!=10){
    echo '<br>the tow numbers are equale: '.$Num1.' = '.$Num2;
}
else if ($Num1>$Num2){
    echo '<br>the Number one is geater than Number tow: ' . $Num1 . ' > ' . $Num2;
} else if ($Num1 === $Num2) {
    echo '<br>the tow numbers are equale ===: ' . $Num1 . ' > ' . $Num2;
}
else{
    echo "<br>the tow numbers are not equale: $Num1 != $Num2";
}

$arr= array("one","tow","three");
echo "<br>$arr[1]";
$arr[3]="four";
echo "<br>$arr[3]";
print ("<br>");
print_r($arr);














?>
