<html>
<?php include 'database.php'; ?>
<?php

if(isset($_POST['search']))
{
session_start();
$username=$_SESSION['username'];
$pgid=$_POST['pgid'];
$name=$_POST['name'];
$flat_no=$_POST['flatno'];
$street=$_POST['Area_street'];
$city=$_POST['City'];
$contact_no=$_POST['contact_no'];
$bathroom=$_POST['bathroom'];
$wifi=$_POST['wifi'];
$AC=$_POST['AC'];
$meals=$_POST['meals'];
$laundry=$_POST['laundry'];
$maid=$_POST['maid'];
$landmark=$_POST['landmark'];
$distance=$_POST['distance_km'];
$email=$_POST['email'];
// Retrieve username and password from database according to user's input
$in = "INSERT into pg(PGID,mgr_id,Pg_name,Flat_no,Street_Area,City,contact_no,Email,Bathroom,Wifi,AC,Meals,Laundry,Maid,landmark,distance_km)values('$pgid','$username','$name','$flat_no','$street','$city',$contact_no,'$email',$bathroom,$wifi,$AC,$meals,$laundry,$maid,'$landmark',$distance)";
 if(!mysqli_query($con,$in))
 {
     echo 'inserted';
 }

 header("refresh:2;url:index.php");
}
?>
</html>