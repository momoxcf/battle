<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

<h3>Etat: </h3>

<?php
    include "_functions.php";

  $conn = get_pq_conn();
  $result = pg_query($conn, "SELECT nb_pv FROM etat");
  $row = pg_fetch_row($result);
  $nb_pv = $row[0];

  echo "nbpv est : ".$nb_pv." <br>";


  $result = pg_query($conn, "SELECT nb_points FROM etat");
  $row = pg_fetch_row($result);
  $nb_points = $row[0];

  $TEST = "test";

  echo "nbpoint est : ".$nb_points." <br>";

?> 

</body>
</html>
