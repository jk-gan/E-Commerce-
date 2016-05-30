<?php

  $host = "localhost:8889";
  $user = "root";
  $pswd = "root";
  $dbname = "db_ecommerce";

  $conn = mysqli_connect($host, $user, $pswd, $dbname) or die ("Error connecting to MySQL");
  // echo "Connected to MySQL <br />";

  // Check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  // mysqli_close($conn);

?>
