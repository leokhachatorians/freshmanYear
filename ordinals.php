<?php

$string = "here goes nothing!";
for ($i = 0; $i < strlen($string); $i++) {
	$char = ord($string[$i]);
	echo "$string[$i] has ASCII code $char\n";
}
