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
      <div class="heading">
      <h1>HOUSES FOR RENT</h1>
</div>
      <?php
        if(isset($_POST['search']))
        {
          $landmark=$_POST['landmark'];
          $distance=$_POST['distance'];
          $query = "SELECT * from pg where landmark='$landmark' and distance_km <='$distance'";
          $query_run=mysqli_query($con,$query);
          while($row=mysqli_fetch_array($query_run))
          {
                ?>
            <form action="" method="POST">
            <label for="pgid">PG ID: </label> 
            <input type="text" id="pgid" name="pgid" value="<?php echo $row['PGID'] ?>"readonly="readonly" /><br>
            <label for="name">Name: </label> 
            <input type="text" id="name" name="name"  value="<?php echo  $row['Pg_name'] ?>" readonly="readonly"/><br>
            <label for="flat">Flat no: </label> 
            <input type="text" id="flat" name="flat"  value="<?php echo   $row['Flat_no'] ?>" readonly="readonly"/><br>
            <label for="street">Street/Area: </label> 
            <input type="text" id="street" name="street"  value="<?php echo   $row['Street_Area'] ?>" readonly="readonly"/><br>
            <label for="city">City: </label> 
            <input type="text" id="city" name="city"  value="<?php echo   $row['City'] ?>" readonly="readonly"/><br>
            <label for="contact_no">Contact number: </label> 
            <input type="text" id="contact_no" name="contact_no"  value="<?php echo  $row['Contact_no'] ?>" readonly="readonly"/><br>
            <label for="mgr_id">Manager ID::</label> 
            <input type="text" id="mgr_id" name="mgr_id" value="<?php echo $row['mgr_id'] ?>"readonly="readonly"/><br>
            <label for="bathroom">Attach Bathroom Facility: </label> 
            <input type="text" id="bathroom" name="bathroom" value="<?php echo $row['Bathroom'] ?>"readonly="readonly" /><br>
            <label for="wifi">WIFI facility: </label> 
            <input type="text" id="wifi" name="wifi"  value="<?php echo  $row['Wifi'] ?>" readonly="readonly"/><br>
            <label for="AC">AC facility: </label> 
            <input type="text" id="AC" name="AC"  value="<?php echo   $row['AC'] ?>" readonly="readonly"/><br>
            <label for="meals">Meals provided: </label> 
            <input type="text" id="meals" name="meals"  value="<?php echo  $row['Meals'] ?>" readonly="readonly"/><br>
            <label for="laundry">Laundry facilities:</label> 
            <input type="text" id="laundry" name="laundry" value="<?php echo $row['Laundry'] ?>"readonly="readonly"/><br>
             <label for="maid">Maid facility: </label> 
            <input type="text" id="maid" name="maid" value="<?php echo $row['Maid'] ?>"readonly="readonly" /><br>
            <label for="landmark">Landmark : </label> 
            <input type="text" id="landmark" name="landmark"  value="<?php echo  $row['landmark'] ?>" readonly="readonly"/><br>
            <label for="distance_km">Distance in kilometeres: </label> 
            <input type="text" id="distance_km" name="distance_km"  value="<?php echo   $row['distance_km'] ?>" readonly="readonly"/><br>
            </form>
            <?php
          }
        }      
      ?>
  </body>
</html>
  
