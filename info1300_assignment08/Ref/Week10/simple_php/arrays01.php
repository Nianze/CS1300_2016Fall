<?php
/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* simple script to demonstrate arrays
*
*/


// variables
$plain_array = array(1,2,3,"four");
$assoc_array = array("Brady"=>12, "Blount"=>29);

// show array values
print_r($plain_array);
var_dump($plain_array);
print_r($assoc_array);
var_dump($assoc_array);
echo("Brady: " . $assoc_array["Brady"] . "\n");

?>