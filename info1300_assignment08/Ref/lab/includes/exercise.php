<?php 

$my_numbers = array(3, 5, 16, 35, 26, 24, 56);

function lotteries(){
	// Looping through an associative array
	
	$lotteries = array("John" => "Powerball", "Maria" => "Mega Millions", "Pablo" => "NY Lotto");

	// TO DO: Use a FOREACH LOOP to loop through this array and 
	// print out all the values. Your outputs should look like: "[Name of person] played the [name of lottery] lottery".

}


function power_lottery(){
	// Looping through an indexed array
	
	$winning_nums = array(2, 3, 16, 48, 56, 24);

	echo "The winning numbers for the Powerball are: <br>";

	// TO DO: Use a FOR LOOP to loop through this array and 
	// print out all the numbers, each in a separate line. 

}

// TO DO: Call the lotteries function. 


echo "<br>";

// TO DO: Call the power lottery function. 


echo "<br>";

// TO DO: Now that you have seen how to create and call functions, you are ready to try it by yourself.
// 1. Create a function valid_ticket that takes in an array as an argument.
// 2. Get the length of the array.
// 3. If the length of the array is not equal to six echo "Your ticket is invalid". 


// TO DO: Call the newly created function on the array $my_numbers.

?>