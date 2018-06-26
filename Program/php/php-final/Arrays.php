<?php


echo "<b>Simple array</b><br>";
//Arrays
$subjects = array("PHP", "HTML", "JavaScript");
echo "I like " . $subjects[0] . ", " . $subjects[1] . " and " . $subjects[2] . ".";



echo "<br><br><b>Associative array</b>";
//Associative Array
$age = array("Raj"=>"35", 10,20,"vishal"=>"37", "Ram"=>"43");
echo "<br>Vishal is " . $age['vishal'] . " years old.";



echo "<br><br><b>Printing associative array</b>";
//Looping through an associative array
foreach($age as $x => $x_value)
{
echo "<br>Key=" . $x . ", Value=" . $x_value;
}
echo "<br><br>";




echo "<br><b>2-Dimensional array</b><br>";
//2-Dimensional Array
$cars = array
(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Range Rover",5,2),
    array("Land Rover",17,15)
);
print_r($cars);


?>