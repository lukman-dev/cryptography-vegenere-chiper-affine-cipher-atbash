<?php
function atbash($plaintext)
{
	$plaintext = strtolower($plaintext);
	$text = "";
	$array = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'];

	for ($i = 0; $i < strlen($plaintext); $i++) {
		$char = $plaintext[$i];
		if ($char == " ") {
			$text .= $char;
		}
		$index = array_search($char, $array);
		$text .= $array[35 - $index];
		$result = $text;
	}

	return $result;
}
