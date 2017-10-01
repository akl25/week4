<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br>";

//Part 2
$date = str_replace("-", "/", $date); //replaces string"-" with "/" in $date
echo $date;
echo "<br><br>";

//Part 3
if (strcmp($date, $tar) > 0) {	//If current date is greater than target date
	echo "the future";
} elseif (strcmp($date, $tar) < 0) { //If current date is less than target date
	echo "the past";
} else { //If both dates are the same
	echo "Oops";
}
echo "<br><br>";

//Part 4
echo strpos($date, "/")." ".strrpos($date, "/");  //Prints out first and last occurrence of string
echo "<br><br>";

//Part 5
echo str_word_count($date);
echo "<br><br>";

//Part 6
echo strlen($date); //Prints out number of characters in string
echo "<br><br>";

//Part 7
echo ord($date);
echo "<br><br>";

//Part 8
echo substr($date, -2);
echo "<br><br>";

//Part 9
$date = explode("/", $date); //Separates string into array based on separator
foreach ($date as $value) {  //Foreach loop to print out array elements
	echo $value." ";
}
echo "<br><br>";

//Part 10
foreach ($year as $value) {
	switch ($value) {
		case ($value % 4 == 0 && $value % 100 != 0 || $value % 400 == 0):
			echo "True ";
			break;
		default:
			echo "False ";
			break;
	};
}
echo "<br><br>";
?>