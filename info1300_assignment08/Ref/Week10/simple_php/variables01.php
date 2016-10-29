<?php
/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* simple script to demonstrate variables
*
*/


// variables
$num1 = 1;
$num2 = 2;

// manipulate variables and get types
$sum1 = $num1 + $num2;
$sum1_type = gettype($sum1);
$sum2 = 1 + 2;
$sum2_type = gettype($sum2);
$sum3 = $num1 . "2";
$sum3_type = gettype($sum3);

// show results
print "sum1 = $sum1\n";
print "sum1 type = $sum1_type\n";
print "sum2 = $sum2\n";
print "sum2 type = $sum2_type\n";
print "sum3 = $sum3\n";
print "sum3 type = $sum3_type\n";

?>