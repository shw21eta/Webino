<?php

 // While Loop
$number=1;
while($number <= 5) {
echo "<br>The number is:".$number;
$number++;
}


// Do-While Loop
$number=1;
do {
echo "<br>The number is:".$number;
$number++;
} while($number <= 5);



// For Loop

$sum = 0;
for($i = 0; $i <= 5; $i++) {
$sum = $sum + $i;
}
echo "Sum of 1 to 5 is: ".$sum;





// Foreach Loop 
$array=array(1,2,3,4,5);
echo "Elements of array are:";
foreach($array as $element) {
echo $element." ";
}

?>
