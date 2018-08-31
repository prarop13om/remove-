<?php
//trim off excess whitespace off the whole
$text = trim($_POST['ber_input']);

//explode all separate lines into an array
$textAr = explode("\n", $text);

//trim all lines contained in the array.
//$textAr = array_filter($textAr, 'trim');

//loop through the lines
foreach($textAr as $line){
	
	//echo $full_area."\n";
	echo str_replace("-", "", $line)."\n";
	
	 
}
?>