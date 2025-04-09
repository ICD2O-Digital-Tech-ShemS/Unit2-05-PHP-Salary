<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <link rel="icon" type="image/png" sizes="180x190" href="./Favicon/Triangle.png">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Salary</title>
  </head>
  <body>
    <?php 
        echo "<h1>Fill in information to calculate amount of pay</h1>";
    ?>
    <!-- Form for user to input hours worked and hourly rate -->
    <form action="results.php" method="post">
      <label for="hours-worked">Hours Worked :</label>
      <input type="text" id="hours-worked" name="hours_worked" placeholder="hours worked" required>
      <br>
      <label for="hourly-rate">Hourly Rate : $</label>
      <input type="text" id="hourly-rate" name="hourly_rate" placeholder="hourly rate" required>
      <br>
      <input type="submit" value="Calculate Amount of pay">
    </form>

<iframe id="results" name="results">
    <div id="user-info">
      <div id="money-earned"></div>
      <div id="money-taken"></div>
    </div>
  </iframe>
  </body>
</html>