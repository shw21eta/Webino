<?php

echo "Reading values from cookies:<br>";

$userCookie = $_COOKIE['user'];
$passCookie = $_COOKIE['pass'];

echo "<br>Username :".$userCookie;
echo "<br>Password :".$passCookie;

?>