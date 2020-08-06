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
    <H1>ADD THE DETAILS OF THE PG </H1>
     <form action="addproc.php" method="POST">
            <label for="pgid">PG ID: </label> 
            <input type="text" id="pgid" name="pgid"  value="pgN"/><br>
            <label for="name">Name: </label> 
            <input type="text" id="name" name="name"  /><br>
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
            <label for="bathroom">Attach Bathroom Facility: </label> 
            <input type="text" id="bathroom" name="bathroom" /><br>
            <label for="wifi">WIFI facility: </label> 
            <input type="text" id="wifi" name="wifi"  /><br>
            <label for="AC">AC facility: </label> 
            <input type="text" id="AC" name="AC"  /><br>
            <label for="meals">Meals provided: </label> 
            <input type="text" id="meals" name="meals"  /><br>
            <label for="laundry">Laundry facilities:</label> 
            <input type="text" id="laundry" name="laundry" /><br>
            <label for="maid">Maid facility: </label> 
            <input type="text" id="maid" name="maid"  /><br>
            <label for="landmark">Choose a landmark:</label>
            <select name="landmark">
            <option value="NIE College">NIE College</option> 
            <option value="SJCE College">SJCE College</option>
            <option value="Vidhya Vardhaka College">Vidhya Vardhaka College</option>
            </select>
            <label for="distance_km">Distance in kilometeres: </label> 
            <input type="text" id="distance_km" name="distance_km"  /><br>
            <input type="submit" name="search" value="Submit">
            </form>

  </body>
</html>
