<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

function make_randoms($array) {
	global $temp_num;
	for ($i = 0; $i < 10; $i++) {
		$temp_num = rand(1,5);
		array_push($array, $temp_num);
	}
	for ($j = 0; $j < count($array); $j++) {
		print $j.": ".$array[$j]."</br>";
	}
	return $array;
}

function get_and_sort($array) {
	$array = make_randoms($array);
	print "</br>";
	for ($k = 0; $k < count($array); $k++) {
		if ($array[$k] > 3) {
			print $k.": ".$array[$k]."</br>";
			global $high_array;
			array_push($high_array, $array[$k]);
		}
	}
	return $array;
}

get_and_sort($number_array);

?>