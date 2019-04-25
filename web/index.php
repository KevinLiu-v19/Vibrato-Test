<html>
 <head>
  <title>PHP Web Page</title>
 </head>
 <body>
  <h1>PHP Web Page</h1>
  <?php
   $conn = mysqli_connect('db', 'user', 'pass', "sqlDb");
   if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
   } else {
    echo "Connected to database</br>";
   }
   mysqli_close($conn);
  ?>
 </body>
</html>
