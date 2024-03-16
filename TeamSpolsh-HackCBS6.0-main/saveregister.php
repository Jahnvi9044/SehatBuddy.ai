<?php
include "db.php";
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$password=$_POST['password'];
$mobno=$_POST['phoneno'];
$mobno1=$_POST['phoneno1'];
$mobno2=$_POST['phoneno2'];


$query="insert into registration(name,emailid,password,phoneno,phoneno1,phoneno2) 
values('$name','$emailid','$password','$mobno','$mobno1','$mobno2'
)";
$query2="insert into login(emailid,password) 
values('$emailid','$password')";
mysqli_query($con,$query2);

if(mysqli_query($con,$query))
{
?>
<script>
alert("registration Successfully");
window.location="index.php";
</script>
<?php
}

?>