<html>
<?php include 'database.php'; ?>
<?php

$stuid=$_POST['stuid'];
$review=$_POST['review'];
$rating=$_POST['rating'];
$query = "SELECT PGID from student where student_id='$stuid'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$in = "INSERT into reviews(student_id,PGID,review,rating)values('$stuid','{$row['0']}','$review','$rating')";
 if(!mysqli_query($con,$in))
 {
     echo 'not inserted';
 }
 else{
     echo 'inserted';
 }

 header("refresh:2;url:index.php");

?>
</html>