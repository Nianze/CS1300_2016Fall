/*
* INFO/CS 1300
* Fall 2016
* Steve Paling
*
* A simple JavaScript file to demonstrate basic language features
*
*/

/* establish global variables */
/*global window, document*/

window.onload = function date_and_season() {
    "use strict";
    // variables
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        weekNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
        // get pieces of date
        full_date = new Date(),
        day_of_week = weekNames[full_date.getDay()],
        this_month_text = monthNames[full_date.getMonth()],
        //this_month_text = "December",
        today = full_date.getDate(),
        this_year = full_date.getFullYear(),
        // set information up for insertion into DOM tree
        new_span = document.createElement('span'),
        new_text = document.createTextNode(day_of_week + ', ' + this_month_text + ' ' + today  + ', ' + this_year),
        position = document.getElementsByTagName('footer')[0];
    // append date to footer
    new_span.appendChild(new_text);
    position.appendChild(new_span);
    // alter image source by season
    if ((this_month_text === "September") || (this_month_text === "October") || (this_month_text === "November")) {
        document.getElementById('tree_image').src = 'images/tree_fall.png';
    } else if ((this_month_text === "December") || (this_month_text === "January") || (this_month_text === "February")) {
        document.getElementById('tree_image').src = 'images/tree_winter.png';
    } else if ((this_month_text === "March") || (this_month_text === "April") || (this_month_text === "May")) {
        document.getElementById('tree_image').src = 'images/tree_spring.png';
    } else if ((this_month_text === "June") || (this_month_text === "July") || (this_month_text === "August")) {
        document.getElementById('tree_image').src = 'images/tree_summer.png';
    } else {
        document.getElementById('tree_image').src = 'images/tree_four.png';
    } // end if
};

