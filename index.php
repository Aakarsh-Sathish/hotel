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
      <div class="column">
        <h1>Owner details</h1>
        <div class="details">
          <div class="start">
            <a href="owner.php" class="start">Owner details</a>
          </div>
        </div>
      </div>

      <div class="column">
        <h1>Search for houses</h1>
        <div class="details">
          <div class="start">
            <a href="Search.php" class="start">Search for houses</a>
          </div>
        </div>
      </div>
      <div class="column">
        <h1>ADD NEW PG</h1>
        <div class="details">
          <p>
            This link is used create new pg
            <br />
          </p>
          <div class="start">
            <a href="indexadd.php" class="start">ADD</a>
          </div>
        </div>
      </div>
      <div class="column">
        <h1>DELETE PG</h1>
        <div class="details">
          <p>
            This link is used to delete old PG
            <br />
          </p>
          <div class="start">
            <a href="indexdel.php" class="start"> DELETE</a>
          </div>
        </div>
      </div>
       <div class="column">
        <h1>ADD STUDENT DETAILS</h1>
        <div class="details">
          <p>
            This link is used to add student details 
            <br />
          </p>
          <div class="start">
            <a href="indexaddstudent.php" class="start"> ADD STUDENT</a>
          </div>
        </div>
      </div>
      <div class="column">
        <h1>ADD REVIEWS</h1>
        <div class="details">
          <p>
            This link is used to add Reviews
            <br />
          </p>
          <div class="start">
            <a href="indexreview.php" class="start"> ADD Reviews</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
