<?php
try{
	
	if(isset($_GET['t'])) {
	
		$text = base64_decode($_GET["t"]);
		
		$badLet = ["A", "a", "E", "e", "O", "o", "T", "C", "H", "P", "B", "M"];
		
		$goodLet = ["А", "а", "Е", "е", "О", "о", "T", "C", "H", "P", "B", "M"];
		
		for( $i = 0; $i < ( count($badLet) - 1 ); $i++ ){
			
			$text = str_replace($badLet[$i],$goodLet[$i],$text);
			
		}
		
		die($text);
		
	} else {
		
		die("Text too long");
		
	}
	
} catch (Exception $e) {
	
    die("Text is too long");
	
}



?>