<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Main Directory</title>
  <meta name="viewport" content="width=device-width; initial-scale=1.0">
  <link href="styles.css" type="text/css" rel="stylesheet">
</head>
<body>
  <div>
    <header>
      <h1 class="topBottom">Main Directory of PHP</h1>
    </header>
    <nav class="topBottom">
      <p><a href="Comp1/comp1.php">Simple Data Lists</a> | 
         <a href="Comp1/comp1d.php">Do Things with Simple Data Lists</a> | 
         <a href="Comp2/comp2.php">Forms for a Database</a> | 
         <a href="Comp3/comp3.php">Playing with a Database</a> | <a href="Comp4/comp4.php">A Trivia Game</a></p>
    <hr>
    </nav>

  <div id="contentDiv">
    <p>
        <h2>Some Random PHP Output</h2>
    </p>
  <?php
  // Variable for my favorite color
      $myColor = 'purple';
  // Variable for my favorite number
      $myNum = 9;
  // Print the created variables
      echo "<p>My favorite color is $myColor</p>";
      echo "<p>My favorite number is $myNum</p>";
  ?>
  </div>

    <footer class="topBottom"> <hr>
      <p>
        THE END...CLICK SOMETHING FROM THE TOP LIST
      </p>
    </footer>
  </div>
</body> 
</html>