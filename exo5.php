<?php

$tab_calendrier =
	[
		1 => "Janvier",
		2 => "Fevrier",
		3 => "Mars",
		4 => "Avril",
		5 => "Mais",
		6 => "Juin",
		7 => "Juillet",
		8 => "Aout",
		9 => "Septembre",
		10 => "Octobre",
		11 => "Novembre",
		12 => "Decembre"
	];
$nombre_jours = array(
	"Janvier" => 31,
	"Fevrier" => 28,
	"Mars" => 31,
	"Avril" => 30,
	"Mais" => 31,
	"Juin" => 30,
	"Juillet" => 31,
	"Aout" => 31,
	"Septembre" => 30,
	"Octobre" => 31,
	"Novembre" => 30,
	"Decembre" => 31
);
foreach ($tab_calendrier as $mois) {
	echo "<p>il y a " . $nombre_jours[$mois] . " jours dans " . $mois . "</p>";
};
