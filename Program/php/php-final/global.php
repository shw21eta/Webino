<?php
$x = 5;
$y = 10;

function myTest() {
	
	// $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	echo "<p>Variable y inside function is: $y</p>"; 
	
 
}
myTest();

echo "Variable y outside function is: $y";
 
?>
