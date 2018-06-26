 <?php
echo "<b>GLOBALS</b><br>";

$x = 75;
$y = 25;
function addition() {
$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z."<br>";

echo "<br><br><b>SERVER</b><br>";


echo $_SERVER['PHP_SELF']."<br><br>";

echo $_SERVER['SERVER_NAME']."<br><br>";

echo $_SERVER['HTTP_HOST']."<br><br>";

echo $_SERVER['HTTP_USER_AGENT']."<br><br>";

echo $_SERVER['SCRIPT_NAME']."<br><br>";


?> 