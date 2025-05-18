<?php
$age=20;

if($age<13){
    echo "child<br>";
}
elseif($age<=19)
{
    echo "teenager<br>";
} 
elseif ($age <= 64) {
    echo "adult<br>";
} 
else {
    echo "senior<br>";
}

$grade1=40;
$grade2=80;

if(($grade1+$grade2)/2>=60){
    echo "pass<br>";
}
else{
    echo "Fail<br>";
}



?>
