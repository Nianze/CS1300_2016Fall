<?php
/**************************************************************
* INFO/CS 1300
* Fall 2016
**************************************************************/

$term_list = array();

function get_terms() {
    $csv = [];
    $map = array();
    $csv = array_map('str_getcsv', file('data/archery_terms.csv'));
    foreach ($csv as $row) {
        $map[$row[0]] = $row[1];
    }
    return $map;
}

function data_display($terms) {
    foreach ($terms as $key => $value) {
        echo "<dt>" . $key . "</dt>";
        echo "<dd>" . $value . "</dd>"; 
    }
}

$term_list = get_terms();
ksort($term_list); 
data_display($term_list);

?>