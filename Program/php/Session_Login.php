<?php
    
session_start();

if(isset($_POST['login']))
{
    $user=$_POST['username'];
    $pass=$_POST['password'];
    
    $OriginalUser = "wlug";
    $OriginalPass = "wlug@123";
    
    if($user == $OriginalUser && $pass == $OriginalPass)
    {
        
        $_SESSION['authentication']=true;
        echo header('location:Welcome.php');
    }
    else
    {
        echo "Invalid data...Please try Again!";
    }
}


?>


<html>
<head>
<title>Login Form</title>
</head>
<body>
<center>
    <h2>Login Here</h2>
    <form name="myForm" action="" method="post">
        
        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    
    </form>
</center>    
</body>    
</html>