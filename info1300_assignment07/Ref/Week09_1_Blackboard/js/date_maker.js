/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to append the date to a footer
*
*/

/* establish global variables */
/*global window, document*/

window.onload = function date_and_season() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    // get pieces of date
    var full_date = new Date();
    var today = full_date.getDate();
    var this_month_text = monthNames[full_date.getMonth()];
    var this_year = full_date.getFullYear();
    // set information up for insertion into DOM tree
    var new_span = document.createElement('span');
    var new_text = document.createTextNode(today + ' ' + this_month_text + ' ' + this_year);
    var position = document.getElementsByTagName('footer')[0];
    // append date to footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
};


