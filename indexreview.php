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

    <H1>ADD REVIEWS FOR A PG </H1>
    <form action="addreviewproc.php" method="POST">
            <label for="stuid">Student ID: </label> 
            <input type="text" id="stuid" name="stuid"  /><br>
            <label for="review">Review: </label> 
            <input type="text" id="review" name="review"  /><br>
            <label for="rating">Rating out of 5: </label> 
            <input type="number" id="rating" name="rating"  /><br>
            <input type="submit" name="search" value="Submit">
            </form>

  </body>
</html>
