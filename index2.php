<html>
<head>
<title>Calc</title>
</head>

<body>

<?php

function sum(int $x, int $y){
	return $x + $y;
}

function substract(int $x, int $y){
	return $x - $y;
}

function multiplication(int $x, int $y){
	return $x * $y;
}

function division(int $x, int $y){
	return $x / $y;
}


$op = $_GET['op'];
$x = $_GET['x'];
$y = $_GET['y'];

if (isset($op) == TRUE && isset($x) == TRUE && isset($y) == TRUE) {

	if ($op == sum){
		$w = sum($x,$y);
		echo "<h1> $x + $y = $w </h1>";
	}

	elseif ($op == substract){
		$w = substract($x,$y);
		echo "<h1> $x - $y = $w </h1>";
	}

	elseif ($op == multiplication){
		$w = multiplication($x,$y);
		echo "<h1> $x * $y = $w </h1>";
	}

	elseif ($op == division){
		$w = division($x,$y);
		echo "<h1> $x / $y = $w </h1>";
	}

	elseif ($op != sum || $op != substract || $op != multiplication || $op != division){
		echo "<h1> Unrecognized operation : $op </h1>";
	}



}

else{ echo"<h1> Incorrect or incomplete data <h1>";}

?>

</body>
</html>






