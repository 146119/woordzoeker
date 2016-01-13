<?php


$letters = "abcdefghijklmnopqrstuvwxyz";

$regel = array('-', 'w');
foreach($regel as $i => $w) {
	if ($w == '-') {
		$l = random(0,26);
		$regel[$l] = $letters[$l];
	}
}

$regels = FILE("bestand");
foreach($regels as $regelNr => $data) {
	$data = trim($data);
	if ($data == '') {
		break;
	}
	$wz[$regelNr] = $data;
}
?>