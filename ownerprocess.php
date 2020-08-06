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
        if(isset($_POST['search']))
        {
          $id=$_POST['MID'];
          $query = "SELECT * from manager where mgr_id='$id'";
          $query_run=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($query_run))
          {
            ?>
            <form action="" method="POST">
            <label for="Mgr_id">Manager ID: </label> 
            <input type="text" id="Mgr_id" name="Mgr_id" value="<?php echo $row['Mgr_id'] ?>"readonly="readonly" /><br>
            <label for="fname">First Name: </label> 
            <input type="text" id="fname" name="fname"  value="<?php echo  $row['F_name'] ?>" readonly="readonly"/><br>
            <label for="lname">Last Name: </label> 
            <input type="text" id="lname" name="lname"  value="<?php echo  $row['L_name'] ?>" readonly="readonly"/><br>
            <label for="email">Email: </label> 
            <input type="text" id="email" name="email"  value="<?php echo   $row['email'] ?>" readonly="readonly"/><br>
            <label for="phone_no">Phone number:</label> 
            <input type="text" id="phone_no" name="phone_no" value="<?php echo $row['phone_no'] ?>"readonly="readonly"/><br>
            </form>
            <?php
          }
        }      
      ?>
  </body>
</html>
