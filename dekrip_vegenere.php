<?php
function Dvegenere($plaintext, $keys)
{
	$plaintext = strtolower($plaintext);
	$kunci = strtolower($keys);
	$text = "";
	$arr = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
	$number 	= ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', " "];
	$iter = 0;

	for ($i = 0; $i < strlen($plaintext); $i++) {
		$char = $plaintext[$i];
		if (in_array($char, $number)) {
			$text .= $char;
		} else {
			$plaintext_char 	= array_search($char, $arr);
			$key_char 			= array_search($kunci[$iter % strlen($kunci)], $arr);

			if ($plaintext_char != -1 && $key_char != -1) {
				$count = $plaintext_char - $key_char;
				$text .= $arr[$count < 0  ? $count + count($arr) : $count];
			}
			$iter++;
		}
	}

	$result = $text;
	return $result;
}
