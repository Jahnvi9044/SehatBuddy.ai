<?php
include "db.php";
$name=$_POST['name'];

$mobno=$_POST['phoneno'];

$emailid=$_POST['emailid'];

$dob=$_POST['dob'];



$query="insert into book(name,phoneno,emailid,dob) 
values('$name','$mobno','$emailid','$dob'
)";


if(mysqli_query($con,$query))
{
?>
<script>
alert("Your Appoinment has booked Successfully");
window.location="index.php";
</script>
<?php
}

?>