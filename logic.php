<?php
/*
Create arrays for the words, and symbols
*/
$words = array("one", "weather", "two", "burn", "twice", "phone", "mints", "cap", "remote", "paper", "book", "pen", "pencil");
$symbols = array("#", "@", "*", "!", "$", "&");
$numbers = array("1", "2", "3", "4", "5");
$password  = array();
$length = $_POST['length'];


if ( isset( $_POST['Submit'] ) ) {

	if (isset( $_POST['length'] )) {
		shuffle ($words);
		$password  = array($words);
		shuffle ($password);
	}

	$password  = array_merge($words, $symbols, $numbers);

	
	if (isset( $_POST['symbols'] )) {
		shuffle ($symbols);
		shuffle ($words);
		$password  = array_merge($words, $symbols);
		shuffle ($password);
	}

	if (isset( $_POST['numbers'] )) {
		shuffle ($numbers);
		shuffle ($words);
		shuffle ($symbols);
		array_merge($words, $numbers, $symbols);
		$password  = array_merge($words, $numbers);
		shuffle ($password);
	}


}

//Print the password array 

for ($i = 0; $i < $length; $i++) {
	print $password[$i] . ' ';

}






 
