<?php
//Simple Function

function techno_tweet()
{
   echo "Welcome to TechnoTweet";
   echo "<br>Enjoy the session...<br>";
}
techno_tweet();

//Function with Argument

function Addition($num1, $num2)
{
$sum=$num1+$num2;
echo "Sum = ".$sum;
}
Addition(10,20); 


//Funtion With Return Values

function Add($num1, $num2)
{
$sum=$num1+$num2;
return $sum;
}
$result = Add(10,20);
echo "<br>Sum from function: ".$result;

?>