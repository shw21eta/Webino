<?php

$number1=10;
$number2=20;

//Arithmetic operators
echo "<b>Arithmetic operators</b>";
echo "<br>Addition = ".($number1+$number2);
echo "<br>Subtraction = ".($number1-$number2);


//Assignment Operators
echo "<br><br><b>Assignment operators</b>";
$number2=$number1;
echo "<br> number2 is now: ".$number2;
$number2+=$number1;
echo "<br> Now, number2 is: ".$number2;


//Comparison operators
echo "<br><br><b>Comparison operators</b><br>";
$n1=10;
$n2="10";
if($n1==$n2)                 // ===
	echo "Same";
else
	echo "Not same";


//Increment / Decrement operators
echo "<br><br><b>Increment / Decrement operators</b>";
$n1=10;
echo "<br> N1 is: ".$n1;
$n1++;
echo "<br> Now, N1 is: ".$n1;



//Logical operators
echo "<br><br><b>Logical operators</b><br>";
$n1=10;
$n2="10";
if($n1==10 and $n2==10)                
	echo "True";
else
	echo "False";

//String operators
echo "<br><br><b>String operators</b>";
$str="Walchand Linux";
echo "<br> String is: ".$str;
$str.="Users' Group";
echo "<br> Now, String is: ".$str;


?>
