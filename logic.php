<?php
/*
Create arrays for the words, and symbols
*/
$words = array("one", "weather", "two", "burn", "twice", "phone", "mints", "cap", "remote", "paper", "book", "pen", "pencil", "red", "plane", "dust", "car", "train");
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

	



}











 
