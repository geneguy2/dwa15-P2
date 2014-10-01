<?php
/*
Create arrays for the words, and symbols
*/
$words = array("one", "weather", "two", "burn", "twice", "phone", "mints", "cap", "remote", "paper", "book", "pen", "pencil");
$symbolsList = array("#", "@", "*", "!", "$", "&");
$numbers = array("1", "2", "3", "4", "5");
$password  = array();
$length = $_POST['length'];




if ( isset( $_POST['Submit'] ) ) {

	if (isset( $_POST['length'] )) {
		shuffle ($words);
		$password  = $words;
		shuffle ($password);
	}

	if (isset( $_POST['symbols'] )) {
		shuffle ($symbolsList);
		shuffle ($words);
		$password  = array_merge($words, $symbolsList);
		shuffle ($password);
	}

	if (isset( $_POST['numbers'] )) {
		shuffle ($numbers);
		shuffle ($words);
		shuffle ($symbolsList);
		array_merge($words, $numbers, $symbolsList);
		$password  = array_merge($words, $numbers);
		shuffle ($password);
	}


}








 
