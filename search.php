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
        <form method="post" action="searchprocess.php">
        <label for="name">Enter your name : </label><br />
        <input type="text" id="name" name="name" placeholder="Enter your name"/><br/>
        <label for="USN">Enter your USN : </label><br />
        <input type="text" id="USN" name="USN" placeholder="Enter your USN"/><br/>
 <label for="landmark">Choose a landmark:</label><br>
 <select name="landmark">
        
        <option value="NIE College">NIE College</option> 
        <option value="SJCE College">SJCE College</option>
        <option value="Vidhya Vardhaka College">Vidhya Vardhaka College</option>
</select>
<br>
<label for="distance">Enter the distance in km : </label><br />
        <input type="text" id="distance" name="distance" placeholder="Enter the distance in km"/><br/>
        <input type="submit" name="search" value="Submit">
</form>
  </body>
</html>
