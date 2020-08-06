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
  <div class="ownerchoice">
    <form method="post" action="ownerprocess.php">
      <fieldset>
        <legend>Information</legend>
        <label for="MID">Manager ID:</label><br />
        <input type="text" id="MID" name="MID" value="ManagerID" /><br />
        <input type="submit" name="search" value="Submit">
      </fieldset>
    </form>
</div>
  </body>
</html>
