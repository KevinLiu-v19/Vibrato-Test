<html>
 <head>
  <title>PHP Web Page</title>
 </head>
 <body>
  <h1>PHP Web Page</h1>
  <?php
   /* Establish MySQL database connection */
   $conn = mysqli_connect('db', 'user', 'pass', "sqlDb");
   if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
   } else {
    echo "Connected to database</br>";

    /* Query Users table and display results */
    echo '<h2>Users List</h2>';
    $query = 'SELECT * From Users';
    $result = mysqli_query($conn, $query);

    echo '<table><thead><tr>';
    echo '<th>userid</th>';
    echo '<th>name</th>';
    echo '</tr></thead>';

    while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
     echo '<tr><td>' . $value['userid'] . '</td>';
     echo '<td>' . $value['name'] . '</td></tr>';
    }
    echo '</table>';
   }
   mysqli_close($conn);
  ?>
 </body>
</html>
