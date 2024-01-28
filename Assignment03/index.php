<?php
	// Question 1
  $counter = 1;
  echo("While loop displays odd numbers between 1 and 15") . "<br>";
  while ($counter <= 15) {
	echo($counter) . "<br>";
	$counter = $counter + 2;
	}
	
  // Question 2
  echo("For loop displays numbers between 10 and 20") . "<br>";
  for ($counter = 10; $counter <= 20; $counter++) {
	  echo($counter) . "<br>";
	  $counter++;
  }
  echo "<br>";
  // Question 3
  echo("Use of if/else statement to figure out the bonus for a sales person") . "<br>";
  $sales = 5000;
  $bonus = 0;
  if ($sales > 2000 && $sales <= 3000) { 
	$bonus = 0.1;
  } else if ($sales > 3000 && $sales <= 4000) {
	  $bonus = 0.2;
  } else if ($sales > 4000) {
	  $bonus = 0.3;
  }	  
  echo "Sales of " . $sales . " will receive a " . $bonus . "%" . "<br>" . "<br>";
 
  // Question 4
  echo("Use of a Switch statement to display the state name for a particular city") . "<br>";
  $city = "Boston";
  switch($city) {
	  case "Boston":
	    echo "Massachusetts" . "<br>";
		break;
		
	  case "Chicago":
		echo "Illinois" . "<br>";
		break;
		
	  case "Miami":
	    echo "Florida" . "<br>";
		break;
		
	  case "New York":
	    echo "New York" . "<br>";
		break;
		
	  default:
	    echo "United States" . "<br>";
		break;
  }
?>