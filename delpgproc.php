<html>
<?php include 'database.php'; ?>
<?php

if(isset($_POST['search']))
{
session_start();
$username=$_SESSION['username'];
$pgid=$_POST['pgid'];
$email=$_POST['email'];
// Retrieve username and password from database according to user's input
$out = "DELETE FROM pg where PGID='$pgid' and mgr_id='$username' and Email='$email'";
 if(mysqli_query($con,$out))
 {
    echo ' pg  deleted';
 }
 else{
     echo 'pg not deleted';
 }

}
 ?>
</html>