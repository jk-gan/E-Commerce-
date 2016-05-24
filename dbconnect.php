<?php

  $host = "localhost:8889";
  $user = "root";
  $pswd = "root";
  $dbname = "db_ecommerce";

  $conn = mysqli_connect($host, $user, $pswd, $dbname) or die ("Error connecting to MySQL");
  echo "Connected to MySQL <br />";

  mysqli_close($conn);

?>
