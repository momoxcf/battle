<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

<h3>Calcul des nombres premiers</h3>

<?php
    include "_functions.php";

  $nb = $_GET['nb'];
  if (empty($nb)) 
  {
      	echo "Erreur, vous devez donner un nombre (nb) en parametre !";
        exit; 
  }

  $start = $_GET['start'];
  if (empty($start)) 
  {
      	echo "Erreur, vous devez donner un nombre (start) en parametre !";
        exit; 
  }

  echo "Calcule de ".$nb." nombre premier en commençant par ".$start." :<br>";

  function is_premier( $num )
  {
	for ($i = 2; $i < $num; $i++)
		if ($num % $i == 0)
			return false;
	return true;
  }

  for($i = $start; $i < ($nb+$start); ++$i)
  {
	if(is_premier($i))
	{
		echo $i." ";
	}
  }

?> 

</body>
</html>
