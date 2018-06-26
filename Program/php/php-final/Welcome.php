<?php

session_start();

if(isset($_SESSION['authentication']))
{
    echo "Welcome User";
}

else
{
    echo header('location: Session_Login.php');
}

?>

<a href= "Session_Logout.php"> LOGOUT </a>