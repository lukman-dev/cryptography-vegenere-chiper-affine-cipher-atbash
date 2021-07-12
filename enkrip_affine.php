<?php

function enkrip_affine($plain)
{
	$text 		= "";
	$alphabet  	= ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
	$number 	= ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

	for ($i = 0; $i < strlen($plain); $i++) {
		$char = $plain[$i];
		if (in_array($char, $number)) {
			$text .= $char;
		} else {
			$key = array_search($char, $alphabet);
			$key_enkrip = (7 * $key + 10) % 26;
			$text .= $alphabet[$key_enkrip];
		}
		$result = $text;
	}

	return $result;
}
