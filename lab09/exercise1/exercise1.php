<?php

echo "<table>";
for ($i = 0; $i <= 100; $i++) {
	echo "<tr>";
	for ($j = 0; $j <= 100; $j++) {
		if ($i == 0) {
			if ($j == 0) {
				echo "<th></th>";
			} else {
				echo "<th>" . $j . "</th>";
			}
		} else {
			if ($j == 0) {
				echo "<th>" . $i . "</th>";	
			} else {
				echo "<td>" . $i*$j . "</td>";	
			}
		}
	}
	echo "</tr>";
}
echo "</table>";

?>

