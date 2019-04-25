<html>
 <head>
  <title>User Administration Page</title>
 </head>
 <body>
  <h1>User Administration Page</h1>
  <?php
   /* Establish MySQL database connection */
   $conn = mysqli_connect('db', 'user', 'pass', "sqlDb");
   if ($conn->connect_error) {
    die("Database Connection Error: " . $conn->connect_error);
   } else {
    echo "Connected to database</br>";

    echo '<h2>Create new user</h2>';
    echo "<form action='' method='POST'>";
    echo "<input type='text' class='text' name='uname' />";
    echo "<input type='submit' name='insert' class='button' value='Create user' />";
    echo '</br>';

    /* INSERT provided name if user creation form is submitted */
    if (isset($_POST['insert'])) {
     $sqlInsert = "INSERT INTO Users (name) VALUES (?)";
     $insertRow = mysqli_prepare($conn, $sqlInsert);
     $insertRow->bind_param("s", $_POST['uname']);
     if($insertRow->execute() === true) {
      echo "User " . $_POST['uname'] . " created.</br>";
     } else {
      echo "Failed to create " . $_POST['uname'] . ".</br>";
     }
    }

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
