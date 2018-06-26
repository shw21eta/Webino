<?php
   if(isset($_POST['login']))
   {
       $user=$_POST['username'];
       $pass=$_POST['password'];
       setcookie('user',$user);
       setcookie('pass',$pass);
       header('location:CookiePage2.php');
       
       
   }

?>


<html>
<head>
<title>Login Form</title>
</head>
<body>
<center>
    <form name="myForm" action="" method="post">
        
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    
    </form>
</center>    
</body>    
</html>