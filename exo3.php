<?php
function puissance(int $i, int $n)
{
	for ($i = 1; $i < $n; $i++) {
		echo "<p> $i ² = " . $i ** 2 . "</p>\n";
	}
}
puissance(1, 31);
