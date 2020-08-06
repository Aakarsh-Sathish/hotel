<html>
<?php include 'database.php'; ?>
<?php

if(isset($_POST['search']))
{
session_start();
$username=$_SESSION['username'];
$pgid=$_POST['pgid'];
$stuid=$_POST['stuid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$flat_no=$_POST['flatno'];
$street=$_POST['Area_street'];
$city=$_POST['City'];
$contact_no=$_POST['contact_no'];
$email=$_POST['email'];
$col=$_POST['college'];
// Retrieve username and password from database according to user's input
$in = "INSERT into student(PGID,Student_id,F_name,L_name,email,ph_no,College,Flat_no,Street_Area,City)
values('$pgid','$stuid','$fname','$lname','$email',$contact_no,'$col','$flat_no','$street','$city')";
 if(!mysqli_query($con,$in))
 {
     echo 'inserted';
 }

 header("refresh:2;url:index.php");
}
?>
</html>