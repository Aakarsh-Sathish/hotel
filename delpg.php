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
    <H1>DELETE THE PG </H1>
     <form action="delpgproc.php" method="POST">
            <label for="pgid">PG ID: </label> 
            <input type="text" id="pgid" name="pgid"  value="pgN"/><br>
            <label for="email">Email id: </label> 
            <input type="text" id="email" name="email"  /><br>
            <input type="submit" name="search" value="Submit">
            </form>
  </body>
</html>
