<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Kriptografi</title>
</head>

<body>
	<form method="POST">
		<table>
			<tr>
				<td colspan="2">
					<h4> Kriptografi </h4>
				</td>
			</tr>
			<tr>
				<td>
					Plaintext
				</td>
				<td>
					<input type="text" name="plaintext">
				</td>
			</tr>
			<tr>
				<td>key</td>
				<td>
					<input type="text" name="key">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<button type="submit" name="submit">Enkripsi</button>
				</td>
			</tr>
		</table>
	</form>
	<hr>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
	$key = $_POST['key'];
	$plain = $_POST['plaintext'];


	/*
    |--------------------------------------------------------------------------
    | ATBASH CIPHER
    |--------------------------------------------------------------------------
    | Fungsi enkripsi dan dekripi atbash, enkripsi ini bersifat timbal balik, 
	| sehingga tidak membutuhkan fungsi tambahan, satu fungsi sudah dapat digunakan
	| untuk enkripsi dan dekripsi, untuk atbash chpher ini menggunakan key dengan angka 35
    */

	include "atbash.php";
	$atbash = atbash($plain);
	echo $atbash;

	// ------------------------------------------------------------------------


	/*
    |--------------------------------------------------------------------------
    | VEGENERE CIPHER
    |--------------------------------------------------------------------------
    | fungsi enkripsi dan dekripsi vegenere cipher, 
	| fungsi ini haya dapat melakukan enkripsi terhadap huruf, dan akan mengabaikan angka
    */

	//ENKRIP :
	include "enkrip_vegenere.php";

	// $vegenere = Evegenere($plain, $key);
	// echo $vegenere;

	//DEKRIP :
	include "dekrip_vegenere.php";
	// $vegenere = Dvegenere($plain, $key);
	// echo $vegenere;

	// -----------------------------------------------------------------------------


	/*
    |--------------------------------------------------------------------------
    | AFFINE CIPHER
    |--------------------------------------------------------------------------
    | fungsi enkripsi dan dekripsi affine cipher, 
	| fungsi ini haya dapat melakukan enkripsi terhadap huruf, dan akan mengabaikan angka
    */

	//ENKRIP :
	include "enkrip_affine.php";
	// $affine = enkrip_affine($plain);
	// echo $affine;

	// // DEKRIP :
	include "dekrip_affine.php";
	// $affine = dekrip_affine($plain);
	// echo $affine;

	// ---------------------------------------------------------------------------



}

?>