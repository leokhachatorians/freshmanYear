<?php

$r_num = rand(0, 1);

$is_male = $r_num ? True : False;


if ($is_male) {
	echo "Its a boy!\n";
}
else {
	echo "Its a girl!\n";
}

?>
