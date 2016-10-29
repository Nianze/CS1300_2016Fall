<?php
/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* simple script to demonstrate functions
*
*/


// variables
$num1 = 2;
print "num1: $num1\n";

// functions
function square_it($num1) {
    $num1 = $num1 * $num1;
    return $num1;
}

// results
print "num1 before function call: $num1\n";
$num1 = square_it($num1);
print "num1 after function call: $num1\n";

?>