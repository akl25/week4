<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo "<br><br>";

$date = str_replace("-", "/", $date); //replaces string"-" with "/" in $date
echo $date;
echo "<br><br>";

if (strcmp($date, $tar) > 0) {	//If current date is greater than target date
	echo "the future";
} elseif (strcmp($date, $tar) < 0) { //If current date is less than target date
	echo "the past";
} else { //If both dates are the same
	echo "Oops";
}
echo "<br><br>";



?>