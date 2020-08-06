<?php include 'database.php'; ?>
<?php

// Inialize session
session_start();
$username=$_POST['username'];
$password=$_POST['password'];


// Retrieve username and password from database according to user's input
$login = mysqli_query($con,"SELECT * FROM manager WHERE mgr_id='$username' and password='$password'");


// Check username and password match
if (mysqli_num_rows($login) == 1) 
{
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
// Jump to secured page
header('Location:add.php');
}
else {
// Jump to login page

header('Location:indexadd.php');

}
?>