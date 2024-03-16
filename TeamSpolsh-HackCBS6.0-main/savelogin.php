<?php
include "db.php";
$login=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  

    $username=$_POST["emailid"];
    $password=$_POST["password"];
   
    $sql="Select * from registration Where  emailid='$username' AND password='$password' ";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num==1)
   {
        $login=true;
        session_start();
    
        $_SESSION["emailid"]=$username;
       


     if($_SESSION["emailid"])
          {
            header("Location:dashboard.html");
          }
        else
        {
           header("Location:index.php?error=Incorrect username or Password .");
        }
      }  
    else
    {
      ?>
    <script>
    alert("Incorrect username or Password .");
    window.location="login.php";
    </script>
    <?php
    }
    
  }
?>