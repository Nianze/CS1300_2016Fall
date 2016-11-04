<?php
/**************************************************************
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* simple script to process hypothetical archery score data
*
**************************************************************/

/**************************************************************
*
* variables
*
**************************************************************/
// only declare variables used outside of functions
$score_array = [];
$score_calcs = [];

/**************************************************************
*
* functions
*
**************************************************************/

// read CSV data in a 2-dimensional array
function get_scores() {
    // variables
    $raw_scores = [];
    // get the raw score data
    $raw_scores = array_map('str_getcsv', file('data/tournament_scores.csv')); // file path from file that has the include statement, not this file
    return $raw_scores; // pass by value, ends the function
}

// pass the array of scores in, return an array with calculated scores
function score_totaler($score_array) {
    // THIS FUNCTION ASSUMES VALID DATA
    // variables
    $totaled_array = [];
    $indiv_scores = [];
    $score_total = 0;
    $x_total = 0;
    $i; // counter variable
    // process the data
    foreach($score_array as $indiv_scores) {
        for($i = 2; $i < 8; $i++) { // rare example of hard coding, number of scores is predictable
            // if(gettype($indiv_scores[$i]) === "integer") {
            if ( // condition 1 AND condition 2
                ($indiv_scores[$i] > 6)      // condition 1
                &&                           // AND
                ($indiv_scores[$i] < 11)) {  // condition 2
                $score_total = $score_total + $indiv_scores[$i];
            } elseif($indiv_scores[$i] === "x") {
                $score_total = $score_total + 10;
                $x_total++;
            }
        }
        // append new values to the array of scores, append the array of scores to the totaled list
        array_push($indiv_scores, $score_total, $x_total);
        array_push($totaled_array, $indiv_scores);
        // reset the holder variables
        $score_total = 0;
        $x_total = 0;
    }
    return $totaled_array;
}

// generate the body of the score table
function data_display($totaled_array) {
    // variables
    $value; // cell in array of individual scores
    $j; // counter variable
    // generate the table body
    foreach($totaled_array as $indiv_scores) {
        echo "\t\t\t\t<tr>"; // notice tabs
        echo "<td>" . $indiv_scores[1] . ", " . $indiv_scores[0] . "</td>"; // switch names to first, last
        for($j = 2; $j < 10; $j++) {
            echo "<td>" . $indiv_scores[$j] . "</td>";
        }
        echo "</tr>\n"; // notice newline character
    }
}

/**************************************************************
*
* function calls
*
**************************************************************/
$score_array = get_scores(); // read CSV data in a 2-dimensional array
$score_calcs = score_totaler($score_array); // pass the array of scores in, return an array with calculated scores
data_display($score_calcs); // generate the body of the score table

?>