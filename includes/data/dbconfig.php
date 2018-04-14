<?php

  $conn_string = "host=localhost port=5432 dbname=QUIZWIZ user=root password=ShwetaBhartia";
  //$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  //"host=localhost dbname=DBNAME user=USERNAME password=PASSWORD"
  $db_connection = pg_connect($conn_string) or die("Database connection failed");
?>
