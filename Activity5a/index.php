<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php

$fruits = array (

array("Apples", "Malus domestica", "105"),
array("Banana", "Musa acuminata", "105"),
array("Blackberries", "Rubus", "100"),
array("Apricots", "Prunus armeniac", "101"),
);


echo "<table border = 1 align = 'center'>";
for ($i = 0; $i < 4; $i++){

	echo "<tr>";

	for ($j = 0; $j < 3; $j++) { 
		echo "<td>";
		echo " " . $fruits[$i][$j];
		echo "</td>";
	}

	echo "<br>";

echo "</tr>";
}

echo "</table>";

?>




</body>
</html>