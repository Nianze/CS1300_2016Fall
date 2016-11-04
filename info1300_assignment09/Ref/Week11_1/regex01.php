<?php
/**************************************************************
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* simple script to search titles from Aesop's fables
*
**************************************************************/

/**************************************************************
*
* linear script approach
*
**************************************************************/

$title_array = array(
    "The Fox and the Stork",
    "Hercules and the Wagoner",
    "The Ant and the Grasshopper",
    "The Oak and the Reeds",
    "The Hare and the Tortoise",
    "Belling the Cat",
    "The Fox and the Goat",
    "The Fox and the Crow",
    "The Wild Boar and the Fox"
    );

// Which titles mention a fox(-es)?
echo "<p>Titles that mention foxes:</p>";
foreach($title_array as $title){
    if(preg_match("/fox/i",$title)) {
        echo $title . "<br>";
    }
}

echo "<br><br>";

// Which titles start with "The Fox and the..."?
echo "<p>Titles that begin with <em>The Fox and the...</em>:</p>";
foreach($title_array as $title){
    if(preg_match("/^The Fox and the/",$title)) {
        echo $title . "<br>";
    }
}

echo "<br><br>";

// Which titles end with "Fox"?
echo "<p>Titles that end with <em>Fox</em>:</p>";
foreach($title_array as $title){
    if(preg_match("/Fox$/",$title)) {
        echo $title . "<br>";
    }
}

echo "<br><br>";


/**************************************************************
*
* structured approach
*
**************************************************************/

// create the regex based on user input
// global variable
$user_string = "fox";
$user_regex; // the concatenated regex based on user input
// build the regular expression
function find_tail($user_string) {
    // variables
    $expr; // regular expression
    // build the expression
    $expr = "/" . $user_string . "$/";
    return $expr;
}

$user_regex = find_tail($user_string);
echo $user_regex . "<br>";

?>