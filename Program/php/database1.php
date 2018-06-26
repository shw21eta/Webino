<?php
    $conn = mysqli_connect("localhost","root","","wce");
    if(mysqli_connect_error())
    {
        echo mysqli_error();
    }
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $mob_no = $_POST['mob_no'];
        $pass = sha1($_POST['password']);
        $email = $_POST['email'];
        $sql = "insert into student (name,mob_no,password,email) values('$name','$mob_no','$pass','$email')";
        $data = mysqli_query($conn, $sql);
        if(!$data)
        {
            echo "<h4>login failed!</h4>";
        }
        else
        {
            echo "<h4>user registered successfully</h4>";
        }
    }
?>

<html>

   <head>
      <title>Text Input Control</title>
       <style>
           *{
               font-family:sans-serif;
           }
           h1{
               font-size: 25px;
               margin: auto;
               width: 50%;
               text-align: center;
               border: 2px solid white;
               background-color: navy;
               color: aliceblue;
               padding: 5px;
           }

           body{
               background-color:lightgray;
           }

           .btn{
               border: 0px;
               color: white;
               padding: 10px;
               border-radius: 7px;
               background-color:darkmagenta;
           }

           .ip{
               align-content: center;
               margin: 0px 100px;
           }
           form{
            margin-top: 20px;
           }
       </style>
   </head>

   <body>


    <h1>Personal Information:</h1>
       <center>
        <form method = "post">
            
         Name: <input class="ip" type = "text" name = "name" placeholder="name"/>
         <br><br>
         Mobile No: <input class="ip" type = "text" name = "mob_no" placeholder="Mobile number"/>
        <br><br>
         Email id:<input class="ip" style="margin-left: 120px " type="mail" name="email" placeholder="Email id"/>
        <br><br>
        Password: <input class="ip" type = "password" name = "password" placeholder="Password"/>
       <br><br>

        <input class="btn" type = "submit" name = "submit" value = "Submit">
        <input class="btn" type = "reset" name = "reset"  value = "Reset" />
            
            
      </form>
    </center>
   </body>

</html>


