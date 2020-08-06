<?php include 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RENT</title>
    <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>" />
</head>
<body>

      <?php
session_start();
$username=$_SESSION['username'];
$query = "SELECT PGID from pg where mgr_id='$username'";
$res=mysqli_query($con,$query);
$options="";
while($row=mysqli_fetch_array($res))
{
    $options=$options."<option>$row[0]</option>";
}
?>
    <H1>ADD THE DETAILS OF THE STUDENTS </H1>
    <form action="addstudentproc.php" method="POST">
    <label for="pgid">Choose PGID:</label>
    <select name=pgid>
    <?php echo $options; ?>
    </select>
    <br>
            <label for="fname">First Name: </label> 
            <input type="text" id="fname" name="fname"  /><br>
            <label for="lname">Last Name: </label> 
            <input type="text" id="lname" name="lname"  /><br>
            <label for="stuid">Student ID: </label> 
            <input type="text" id="stuid" name="stuid"  /><br>
            <label for="flatno">Flat No: </label> 
            <input type="text" id="flatno" name="flatno"  /><br>
            <label for="Area_street">Area/Street: </label> 
            <input type="text" id="Area_street" name="Area_street"  /><br>
            <label for="City">City: </label> 
            <input type="text" id="City" name="City"  /><br>
            <label for="email">Email: </label> 
            <input type="text" id="email" name="email"  /><br>
            <label for="contact_no">Contact number: </label> 
            <input type="text" id="contact_no" name="contact_no" /><br>
            <label for="college">College:</label><br>
            <select name="college">
        <option value="NIE College">NIE College</option> 
        <option value="SJCE College">SJCE College</option>
        <option value="Vidhya Vardhaka College">Vidhya Vardhaka College</option>
         <option value="Other">Other</option>

</select>
            <input type="submit" name="search" value="Submit">
            </form>

  </body>
</html>
