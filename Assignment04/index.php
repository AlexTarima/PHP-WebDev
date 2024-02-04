<?php
	#1
	echo "1<br>";
	# This creates an array of countries' names
	$countries_array = array("USA", "Canada", "Mexico", "Germany", "UK");
	
	#2
	echo "2 <br>";
	# This prints the array of countries
	print_r($countries_array); 
	echo "<br>";
	
	#3
	echo "3 <br>";
	# This adds the string "China" to the end of the array
	array_push($countries_array, "China");
	
	#4
	echo "4 <br>";
	# This remove the first item in the array
	array_shift($countries_array);
	
	#5
	echo "5 <br>";
	# This sorts the array in ascending order
	sort($countries_array);
	
	#6
	echo "6 <br>";
	# This loops through each country in the array and echoes it
	foreach($countries_array as $country) {
		echo $country . "<br>";
	}
	
	#7
	echo "7 <br>";
	# This checks if the country "China" is in the array, and if so, echoes it
	if(in_array("China", $countries_array)) {
		echo "China" . "<br>";
	}
	
	#8
	echo "8 <br>";
	# This creates an associative array where the names of the countries points to their capitals
	$countries_associative = array("Canada" => "Ottawa", "China" => "Beijing", "Germany" => "Berlin", "Mexico" => "Mexico City", "UK" => "London");
	# Then, it loops through each association in the array and echoes each country and capital corresponding to it
	foreach ($countries_associative as $country => $capital) {
		echo $country . " - " . $capital . "<br>";
	}
?>