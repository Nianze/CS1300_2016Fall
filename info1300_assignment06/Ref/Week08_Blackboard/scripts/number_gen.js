/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to generate squares and natural logs
*
*/

/* establish global variables */
/*global window, document*/

// variables
var i;
var num_table;
var new_row;
var cell_1;
var cell_2;
var cell_3;

// functions
function row_maker() {
    "use strict";
    for (i = 2; i < 6; i += 1) {
        // table structure variables
        num_table = document.getElementById('numbers');
        new_row = document.createElement('tr');
        cell_1 = document.createElement('td');
        cell_2 = document.createElement('td');
        cell_3 = document.createElement('td');
        // table content variables
        // notice second way of declaring variables
        var base = document.createTextNode(i); // notice type juggling
        var base_squared = document.createTextNode(i*i);
        var base_log = document.createTextNode(Math.log(i)); // notice no type juggling
        // append row to table
        cell_1.appendChild(base);
        cell_2.appendChild(base_squared);
        cell_3.appendChild(base_log);
        new_row.appendChild(cell_1);
        new_row.appendChild(cell_2);
        new_row.appendChild(cell_3);
        num_table.appendChild(new_row);
    }
}

// function calls
row_maker();
