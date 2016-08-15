<?php

$sentence = "This is a sentence....surprise!";

$alphas = 0;
$digits = 0;
$spaces = 0;

$length = strlen($sentence);

for ($i = 0; $i < $length; $i++) {
	$char = $sentence[$i];
	if (ctype_alpha($char)) {
		$alphas++;
	}
	if (ctype_digit($char)) {
		$digits++;
	}
	if (ctype_space($char)) {
		$spaces++;
	}
}

echo "The sentence is $length characters long.\n";
echo "There are $alphas letters.\n";
echo "There are $digits numbers.\n";
echo "There are $spaces spaces.\n";

?>
