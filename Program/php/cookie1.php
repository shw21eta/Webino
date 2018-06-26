<?php
//Setting new cookie
setcookie("color","red",time()+);
echo $_COOKIE["color"];
?>

<?php
//Updating Cookie
setcookie("color","blue");
echo $_COOKIE["color"];
?>


<?php
//Deleting Cookie
//unset($_COOKIE["yourcookie"]);
/*Or*/
setcookie("yourcookie","yourvalue",time()-1);
?>