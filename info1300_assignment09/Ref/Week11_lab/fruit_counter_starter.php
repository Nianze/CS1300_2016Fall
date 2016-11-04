<?php
/**************************************************************
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* simple script to read in data for an associative array
*
**************************************************************/

/**************************************************************
*
* variables
*
**************************************************************/

// initialize empty, global arrays
$fruit_data = array();
$fruit_count = array();

/**************************************************************
*
* functions
*
**************************************************************/

// read data into flat, not associative, array
// automaticallly get rid of newline character on each line
function get_data() {
    // TODO
    // read file into an array, return the array
}

// read information from flat array into associative array
// associative array will hold the fruit names (once each), 
// followed by the number of times that fruit appears in the data.
function make_inventory($fruit_data) {
    // TODO
    // Read each item in the flat array
    // If that fruit name isn't already an array key, make the fruit name a key and set the value to 1.
    // If that fruit name IS already an array key, increment the value for that key by 1
    // return the array
}

// put the data on the screen in readable form
function fruit_display($fruit_count) {
    // TODO
    // Loop through the associative array from make_inventory, create usable display.
    // Valid HTML is not needed IN THIS CASE.
}

/**************************************************************
*
* function calls
*
**************************************************************/

// TODO
// Add function calls, and pass arrays, as needed

?>